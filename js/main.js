

var hmzinventoryApp = angular.module("hmzinventoryApp",[]);
var HMZIApp = {
		/*Utility function to convert query string to json object */
		searchToObject : function() {
		  var pairs = window.location.search.substring(1).split("&"),
			obj = {},
			pair,
			i;
		  for ( i in pairs ) {
			if ( pairs[i] === "" ) continue;

			pair = pairs[i].split("=");
			obj[ decodeURIComponent( pair[0] ) ] = decodeURIComponent( pair[1] );
		  }
		  return obj;
		},
		getTimeStamp : function(date){
			date = date.split('-');
			return date[2]+"/"+date[0]+"/"+date[1];
		},
		updateMessage : function(msg){
			angular.forEach(angular.element(document).find("div"),function(div,index){
				if(angular.element(div).hasClass("alert")){
					angular.element(div).html(msg);
				}
			});
		},
		removeArray : function(arr, from, to) {
		  var rest = arr.slice((to || from) + 1 || arr.length);
		  arr.length = from < 0 ? arr.length + from : from;
		  arr.push.apply(arr, rest);
		  return arr;
		}
};

hmzinventoryApp.directive('input', [function() {
    return {
        restrict: 'E',
        require: '?ngModel',
        link: function(scope, el, attrs, ctrl) {
            if (attrs.type == 'number' && typeof el.prop('validity') !== 'undefined') {
                el.on('keyup change', function() {
                    var validity = el.prop('validity');
                    ctrl.$setValidity('badInput', !validity.badInput);                      
                });
            }
        }
    };
}]);

hmzinventoryApp.controller("inventoryListCtrl",function($scope,$window,$interval,$location,$http,$filter){
	/* Variable Initialization */
	$scope.sideBarToggleClass = "";	
	$scope.itemNameModel = "";
	$scope.itemDescModel = "";
	$scope.itemIdModel = "";
	$scope.customerName = "";
	$scope.taskDivFlag = true;
	$scope.masterItemsList = [];
	$scope.inventoryItemList = [];
	$scope.buttonTxt = 'Add';
	$scope.purchaseDate = Date.now();
	$scope.formAction = '';
	$scope.leftMenuItems = [{
		'target' : '?a=P&b=dashboard',
		'icon' : 'fa fa-dashboard fa-fw',
		'class' : '',
		'name' : 'Dashboard'
	},{
		'target' : '?a=P&b=m_brand',
		'icon' : 'fa fa-plus-square fa-fw',
		'class' : '',
		'name' : 'Brand Master'
	},{
		'target' : '?a=P&b=m_product',
		'icon' : 'fa fa-plus-square fa-fw',
		'class' : '',
		'name' : 'Product Master'
	},{
		'target' : '?a=P&b=m_p_list',
		'icon' : 'fa fa-dashboard fa-fw',
		'class' : 'ng-hide',
		'name' : 'Products List'
	},{
		'target' : '?a=P&b=m_units',
		'icon' : 'fa fa-plus-square fa-fw',
		'class' : 'ng-hide',
		'name' : 'Unit Master'
	},{
		'target' : '?a=P&b=sales',
		'icon' : 'fa fa-files-o fa-fw',
		'class' : '',
		'name' : 'Sales Order'
	},{
		'target' : '?a=P&b=inv',
		'icon' : 'fa fa-edit fa-fw',
		'class' : '',
		'name' : 'Inventory'
	},{
		'target' : '?a=P&b=',
		'icon' : 'fa fa-table fa-fw',
		'class' : '',
		'name' : 'Reports'
	},{
		'target' : '?a=P&b=',
		'icon' : 'fa fa-bar-chart-o fa-fw',
		'class' : '',
		'name' : 'Charts'
	}];
	$scope.inventoryList = [{
		
	}];
	/* logic to select the left menu based on page name */
	
	var pageName = HMZIApp.searchToObject();
	hightlightMenu(pageName.b);
	switch(pageName.b){		
		case 'dashboard':{
			$scope.dashboardMenu = true;
			loadDefaultView('getDashboardItems',['topFiveInvList','topFiveSalesList','dailySalesGraph']);
			break;
		}
		case 'm_brand':{
			$scope.brandMenu = true;
			loadDefaultView('getBrands','masterItemsList');
			break;
		}
		case 'm_product':{
			$scope.productMenu = true;
			loadDefaultView('getProducts','masterItemsList');
			break;
		}
		case 'm_product_list':{$scope.productListMenu = true;break;}
		case 'sales':{
			$scope.salesMenu = true;
			loadDefaultView('get_inventory_and_sales',['invDropdownList','salesOrderList']);
			break;
		}
		case 'inv':{
			$scope.inventoryMenu = true;
			loadDefaultView('brands_products_and_inv',['brandDropdownList','productDropdownList','inventoryItemList']);
			break;
		}
		case 'reports':{$scope.reportsMenu = true;break;}
		case 'charts':{$scope.chartsMenu = true;break;}
	}
	
	/* Logic to toggle Side Navigation bar -- Menu for Mobile / Tablet / Computer */
	$scope.toggleNavBar = function(){
		if($scope.sideBarToggleClass == "collapse-in"){
			$scope.sideBarToggleClass = "collapse";
		}else if($scope.sideBarToggleClass == "collapse"){
			$scope.sideBarToggleClass = "collapse-in";
		}
	}
	
	$scope.toggleMenu = function(arg){
		$scope.taskDivFlag = !$scope.taskDivFlag;
	}
	
	//Sidebar collapse(in) function
	function sideBarMenuToggle(){
		if($window.outerHeight < 638){
			$scope.sideBarToggleClass = "collapse";
		}else{
			$scope.sideBarToggleClass = "collapse-in";
		}
		
	}
	function timer(){
		$interval(sideBarMenuToggle, 10,2);
	}
		
	$window.onresize = timer;
	$window.onload = timer;
	
	$scope.editListItem = function(index,arrayList){
		$scope.row_index = index;
		if(typeof arrayList == "undefined"){
			$scope.itemNameModel = $scope.masterItemsList[index].item_name;
			$scope.itemDescModel = $scope.masterItemsList[index].item_desc;
			$scope.itemIdModel = $scope.masterItemsList[index].item_id;
		}else{			
			angular.forEach($scope[arrayList][index],function(value,key){				
				if(key.indexOf('date') > 0){
					$scope[key] = $filter('date')(value, 'MM-dd-yyyy');
				}
				else if(key == "brand_id"){
					$scope[key] =  $filter('filter')($scope.brandDropdownList,value)[0];
				}else if(key == "prod_id"){
					$scope[key] =  $filter('filter')($scope.productDropdownList,value)[0];
				}else if(key == "inv_id"){
					$scope[key] =  $filter('filter')($scope.invDropdownList,value)[0];
				}else{
					$scope[key] = isNaN(value) ? value : parseInt(value,10);	
				}
			});
		}
		$scope.buttonTxt = 'Update';
	}
	
	/* Ajax Post method to insert values in DB */
	$scope.postRecord = function(pageName){	
		//console.log('true');
			var postData  = captureFormData(); 
			/*var key = 'salesOrderList';
			var obj = {};
			 $scope[key] = !angular.isDefined($scope[key]) ? [] :  $scope[key];
			var size = $scope[key].length;
			if(size > 0 ){
				angular.forEach($scope[key][0],function(v,k){
					obj[k] = $scope[k];
					console.log($scope[k]);
				});	
				$scope[key].push(obj);
			}
			
			console.log($scope['inventoryItemList'].length);
			console.log(captureFormData("json"));
			$scope['inventoryItemList'].push.apply(captureFormData("json"));
			console.log($scope['inventoryItemList'].length);
			*/
			
			pageName = $scope.formAction == 'delete' ? 'del_'+pageName : ($scope.buttonTxt == 'Update' ? 'update_'+pageName : pageName);			
			
			var configObject = {
				method : 'POST',
				url : 'index.php',
				params : {'a':'A','b':pageName},
				data  : postData,
				reponseType : 'text/html'
			};
			
			$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
			
			$http(configObject)
			.success(function(data){
				successCallBackFn(data);
				$scope.formAction = '';
			})
			.error(function(){
				HMZIApp.updateMessage('<span class="glyphicon warning-sign"></span> Oops!!! Failed To Add Item. Please try again!');
				$scope.formAction = '';
			});
			
			$interval(function(){$scope.alertBoxClass = "hidden";}, 10000,1); 
			
	}
	
	$scope.voidRecord = function(pageName){
		if(confirm('Are you sure want to delete?')){
			$scope.formAction = 'delete';
			$scope.postRecord(pageName);
		}
	}
	
	$scope.prefillsalesrow = function(){
		var selectedInv = $scope.inv_id;
		$scope.selling_price = parseFloat(selectedInv.sell_price);
		jQuery("#sell_qty").trigger("touchspin.updatesettings", {max: selectedInv.quantity});
	}
	
	function successCallBackFn(data){
		//console.log(data);
		if(angular.isArray(data) && typeof data[0]['id'] != 'undefined'){
			HMZIApp.updateMessage('<span class="glyphicon glyphicon-ok"> </span> Added Item Successfully');
			$scope.alertBoxClass = "alert-success";
			$scope.itemIdModel = data[0].id.toString();
			$scope.masterItemsList.unshift({'item_name':$scope.itemNameModel,'item_desc':$scope.itemDescModel,'item_id':$scope.itemIdModel});				
			document['forms'][0].reset();
			$scope.buttonTxt = 'Add';	
		}else if(!isNaN(data) && data == 1){
			HMZIApp.updateMessage('<span class="glyphicon glyphicon-ok"> </span> Item Updated Successfully');
			$scope.alertBoxClass = "alert-success";
			if($scope.buttonTxt == 'Update'){
				updateMasterListItem();
			}
			document['forms'][0].reset();
			$scope.buttonTxt = 'Add';	
		}else if(angular.isObject(data)){
			angular.forEach(data,function(val,key){
				if(angular.isObject(val) && angular.isString(val.updateFlag) && val.updateFlag=="void"){
					HMZIApp.updateMessage('<span class="glyphicon glyphicon-ok"></span> Item Deleted Successfully');	
					$scope.alertBoxClass = "alert-success";
					$scope[key] = HMZIApp.removeArray($scope[key],val.rowIndex);
					document['forms'][0].reset();
					$scope.buttonTxt = 'Add';	
				}else if(angular.isObject(val) && val.updateFlag){
					HMZIApp.updateMessage('<span class="glyphicon glyphicon-ok"></span> Item Updated Successfully');
					$scope.alertBoxClass = "alert-success";
					angular.forEach($scope[key][val.rowIndex],function(v,k){
						$scope[key][val.rowIndex][k] = $scope[k];
					});
					document['forms'][0].reset();
					$scope.buttonTxt = 'Add';	
				}else if(angular.isObject(val) && !val.updateFlag){
					HMZIApp.updateMessage('<span class="glyphicon glyphicon-ok"></span> Added Item Successfully');
					$scope.alertBoxClass = "alert-success";
					var obj = {};
					 $scope[key] = !angular.isDefined($scope[key]) ? [] :  $scope[key];
					var size = $scope[key].length;
					if(size > 0 ){
						angular.forEach($scope[key][0],function(v,k){
							obj[k] = $scope[k];
						});	
						$scope[key].unshift(obj);
					}
					document['forms'][0].reset();
					$scope.buttonTxt = 'Add';	
				}
			});
		}
	}
	
	function loadDefaultView(pageName,listName){
	
		$http.get('index.php?a=A&b='+pageName).success(function(data){			
			if(angular.isObject(data) && angular.isString(listName)){				
				$scope[listName] = data;
			}else if(angular.isObject(data) && angular.isArray(listName)){				
				angular.forEach(listName,function(name,index){					
					if(name.indexOf('Graph')>0){
						loadGraph(data[0][name]);
					}else{
						$scope[name]=data[0][name];
					}
				});
			}				
		}).error(function(err){
			console.log(err);		
		});
	
	}
	
	function hightlightMenu(pageName){
		angular.forEach($scope.leftMenuItems,function(menu,index){
			if(menu.target.indexOf(pageName)>0){
				$scope.leftMenuItems[index]["class"] = "selected";
				
			}
		});
	}
	
	function captureFormData(type){
		var formData = "";
		if(type == "json"){
			formData = [];
		}
		var documentObj = angular.element(document);
		formElements = documentObj.find("input");
		formElements.push.apply(formElements,documentObj.find("textarea"));
		formElements.push.apply(formElements,documentObj.find("select"));
		angular.forEach(formElements,function(ele,value){			
			var $this = angular.element(ele);
			var $id = $this.attr('id');			
			var $model = $this.attr('ng-model');	
			var $val = $scope[$model];	
			//console.log($val);
			$val = angular.isObject($val) ? $val.value : $val;
			$val = !angular.isDefined($val) ? $this.val() : $val;
			$val = $this.hasClass("date-picker") ? HMZIApp.getTimeStamp($this.val().toString()) : $val;
			if(typeof $id != "undefined"){
				if(type == "json"){
					var obj = {};
					obj[$model] = $val;
					formData.push(obj);
				}else{
					formData += "&"+$id+"="+$val;
				}
			}
		});
		if(type == "json"){
			return formData;
		}else{
			formData = formData.indexOf('&')>0 ? formData.substring(1) : formData;
			return formData;
		}
	}
	
	function updateMasterListItem(){
		angular.forEach($scope.masterItemsList,function(item,index){
			if(item.item_id == $scope.itemIdModel){
				item.item_name =$scope.itemNameModel;
				item.item_desc =$scope.itemDescModel;
			}
		});
	}
	
	function loadGraph(data){
		Morris.Line({
        element: 'morris-area-chart',
        data: data,
        xkey: 'date',
        ykeys: ['qty'],
        labels: ['# items solds'],
        hideHover: 'auto',
        resize: true
    });
	
	}
});
