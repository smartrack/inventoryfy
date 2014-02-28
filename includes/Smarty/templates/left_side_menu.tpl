<nav class="navbar-static-side" role="navigation" >
<div class="sidebar-collapse {literal}{{sideBarToggleClass}}{/literal}">
	<ul class="nav" id="side-menu">
		 <li class="sidebar-search">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control" placeholder="Search..." ng-model="leftMenuSearchTxt">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</li>
		<li ng-repeat="menu in leftMenuItems | filter:leftMenuSearchTxt">
			<a href={literal}{{menu.target}}{/literal} class={literal}{{menu.class}}{/literal}><i class={literal}{{menu.icon}}{/literal}></i> {literal}{{menu.name}}{/literal}</a>
		</li>
	</ul>
<!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
