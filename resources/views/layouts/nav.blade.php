<!-- Mobile menu toggle button (hamburger/x icon) -->
<input id="main-menu-state" type="checkbox" />
<label class="main-menu-btn" for="main-menu-state">
	<span class="main-menu-btn-icon"></span> Toggle main menu visibility
</label>

<!-- Sample menu definition -->
<ul id="main-menu" class="sm sm-blue">
	<li><a href="#"><i class="icon-Home"></i>Dashboard</a>
		<ul>
			<li><a href="{{route('main')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 1</a></li>
			<li><a href="{{route('main2')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 2</a></li>
			<li><a href="{{route('main3')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dashboard 3</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="icon-Group"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Usuarios</a>
		<ul>
			<li><a href="{{route('order.list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lista de usuarios</a></li>
			<li><a href="{{route('order.details')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Order Details</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>Menus</a>
		<ul>
			<li><a href="{{route('menu.add')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add New Menu</a></li>
			<li><a href="{{route('menu.list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Menu List</a></li>
			<li><a href="{{route('menu.categories')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Categories</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>Customer</a>
		<ul>
			<li><a href="{{route('customer.list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customer list</a></li>
			<li><a href="{{route('customer.members')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Members</a></li>
		</ul>
	</li>
	<li><a href="{{route('analysis')}}"><i class="icon-Chart-line"><span class="path1"></span><span class="path2"></span></i>Analysis</a></li>

	<li><a href="#"><i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>Online Store</a>
		<ul>
			<li><a href="{{route('ecommerce.products')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
			<li><a href="{{route('ecommerce.cart')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
			<li><a href="{{route('ecommerce.products_edit')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
			<li><a href="{{route('ecommerce.details')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
			<li><a href="{{route('ecommerce.orders')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
			<li><a href="{{route('ecommerce.checkout')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
			<li><a href="{{route('ecommerce.invoice')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
			<li><a href="{{route('ecommerce.invoice_list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>
		</ul>
	</li>

	<li><a href="#"><i span class="icon-Layout-grid"><span class="path1"></span><span class="path2"></span></i>Apps & Widgets</a>
		<ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps</a>
				<ul>
					<li><a href="{{route('app.mailbox')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
					<li><a href="{{route('app.extra_calendar')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
					<li><a href="{{route('app.contact')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
					<li><a href="{{route('app.contact_chat')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
					<li><a href="{{route('app.extra_taskboard')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a>
				<ul>
					<li><a href="{{route('widgets.blog')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
					<li><a href="{{route('widgets.chart')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
					<li><a href="{{route('widgets.list')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
					<li><a href="{{route('widgets.social')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
					<li><a href="{{route('widgets.statistic')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
					<li><a href="{{route('widgets.weather')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
					<li><a href="{{route('widgets.widgets')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
					<li><a href="{{route('widgets.emails')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps</a>
				<ul>
					<li><a href="{{route('maps.google')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
					<li><a href="{{route('maps.vector')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
				</ul>
			</li>
		</ul>
	</li>

	<li><a href="#"><i span class="icon-User"><span class="path1"></span><span class="path2"></span></i>Pages</a>
		<ul>
			<li><a href="{{route('pages.contactUserlist')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>
			<li><a href="{{route('pages.FAQS')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
			<li><a href="{{route('pages.blank')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
			<li><a href="{{route('pages.coming_soon')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
			<li><a href="{{route('pages.customScroll')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
			<li><a href="{{route('pages.gallery')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
			<li><a href="{{route('pages.lightbox')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
			<li><a href="{{route('pages.pricing')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Authentication</a>
				<ul>
					<li><a href="{{route('auth.login')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="{{route('auth.register')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="{{route('auth.lockscreen')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="{{route('auth.userPass')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Miscellaneous</a>
				<ul>
					<li><a href="{{route('miscellaneous.error_404')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="{{route('miscellaneous.error_500')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="{{route('miscellaneous.maintenance')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>
				</ul>
			</li>
		</ul>
	</li>

	<li><a href="#"><i class="icon-Write"><span class="path1"></span><span class="path2"></span></i>Ui Elements</a>
		<ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Utilities</a>
				<ul>
					<li><a href="{{route('utilities.grid')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
					<li><a href="{{route('utilities.badges')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
					<li><a href="{{route('utilities.border')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
					<li><a href="{{route('utilities.buttons')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>
					<li><a href="{{route('utilities.color')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
					<li><a href="{{route('utilities.dropdown')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
					<li><a href="{{route('utilities.dropdownGrid')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
					<li><a href="{{route('utilities.progress')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
					<li><a href="{{route('utilities.ribbons')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
					<li><a href="{{route('utilities.sliders')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
					<li><a href="{{route('utilities.typography')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
					<li><a href="{{route('utilities.tabs')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
					<li><a href="{{route('utilities.timeline')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
					<li><a href="{{route('utilities.timelineHorizontal')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card</a>
				<ul>
					<li><a href="{{route('card.user')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
					<li><a href="{{route('card.advanced')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
					<li><a href="{{route('card.basic')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
					<li><a href="{{route('card.color')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
					<li><a href="{{route('card.group')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons</a>
				<ul>
					<li><a href="{{route('icons.fontawesome')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
					<li><a href="{{route('icons.glyphicons')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
					<li><a href="{{route('icons.material')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>
					<li><a href="{{route('icons.themify')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
					<li><a href="{{route('icons.simpleline')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
					<li><a href="{{route('icons.cryptocoin')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
					<li><a href="{{route('icons.flag')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
					<li><a href="{{route('icons.weather')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components</a>
				<ul>
					<li><a href="{{route('components.bootstrap')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
					<li><a href="{{route('components.datePaginator')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
					<li><a href="{{route('components.media')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
					<li><a href="{{route('components.rangeslide')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
					<li><a href="{{route('components.rating')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
					<li><a href="{{route('components.animations')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
					<li><a href="{{route('components.extFullscreen')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
					<li><a href="{{route('components.extPace')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
					<li><a href="{{route('components.nestable')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
					<li><a href="{{route('components.portletDraggable')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
					<li><a href="{{route('components.modals')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
					<li><a href="{{route('components.sweetAlert')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
					<li><a href="{{route('components.notificacion')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
				</ul>
			</li>
		</ul>
	</li>

	<li><a href="#"><i class="icon-File"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>Forms & Table</a>
		<ul>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms</a>
				<ul>
					<li><a href="{{route('form.advanced')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
					<li><a href="{{route('form.general')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
					<li><a href="{{route('form.wizard')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>
					<li><a href="{{route('form.validation')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
					<li><a href="{{route('form.mask')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
					<li><a href="{{route('form.editorX')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
					<li><a href="{{route('form.dropzone')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
					<li><a href="{{route('form.editorCode')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
					<li><a href="{{route('form.editor')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
					<li><a href="{{route('form.markdowns')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables</a>
				<ul>
					<li><a href="{{route('table.simple')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
					<li><a href="{{route('table.data')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
					<li><a href="{{route('table.editable')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
					<li><a href="{{route('table.color')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
					<li><a href="{{route('table.applications')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Applications</a></li>
					<li><a href="{{route('table.candidates')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Candidates</a></li>


				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#"><i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>Charts</a>
		<ul>
			<li><a href="{{route('chart.js')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
			<li><a href="{{route('chart.flot')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
			<li><a href="{{route('chart.inline')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
			<li><a href="{{route('chart.morris')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
			<li><a href="{{route('chart.peity')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
			<li><a href="{{route('chart.ist')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
			<li><a href="{{route('chart.c3axis')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
			<li><a href="{{route('chart.c3bar')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
			<li><a href="{{route('chart.c3data')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
			<li><a href="{{route('chart.c3line')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
			<li><a href="{{route('chart.echartBasic')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
			<li><a href="{{route('chart.echartBar')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
			<li><a href="{{route('chart.echartPieDoughnut')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
		</ul>
	</li>
</ul>