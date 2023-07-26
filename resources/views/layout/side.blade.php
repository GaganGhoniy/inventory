<li class="header">Apps</li>
                                <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a
                                                href="{{route('apps.inbox')}}"><i class="fa fa-envelope"></i>
                                                <span>Email</span> <span class="badge badge-default mr-0">12</span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a
                                                href="{{route('apps.chat')}}"><i class="fa fa-comments"></i>
                                                <span>Chat</span></a></li>
                                <li class="{{ Request::segment(2) === 'apps' ? 'active' : null }}"><a
                                                href="{{route('apps.calendar')}}"><i class="fa fa-calendar"></i>
                                                <span>Calendar</span></a></li>
                                <li class="{{ Request::segment(2) === 'todolist' ? 'active' : null }}"><a
                                                href="{{route('apps.todolist')}}"><i class="fa fa-th-list"></i>
                                                <span>Todo List</span></a></li>
                                <li class="{{ Request::segment(2) === 'filemanager' ? 'active' : null }}"><a
                                                href="{{route('apps.filemanager')}}"><i class="fa fa-folder"></i>
                                                <span>File Manager</span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'contacts' ? 'active' : null }}"><a
                                                href="{{route('apps.contacts')}}"><i class="fa fa-address-book"></i>
                                                <span>Contacts</span></a>
                                </li>
                                <li class="{{ Request::segment(2) === 'scrumboard' ? 'active' : null }}"><a
                                                href="{{route('apps.scrumboard')}}"><i class="fa fa-tasks"></i>
                                                <span>Scrumboard</span></a></li>
                                <li class="{{ Request::segment(2) === 'blog' ? 'active' : null }}"><a
                                                href="{{route('apps.blog')}}"><i class="fa fa-globe"></i>
                                                <span>Blog</span></a></li>
                                <li class="{{ Request::segment(2) === 'social' ? 'active' : null }}"><a
                                                href="{{route('apps.social')}}"><i class="fa fa-share-alt-square"></i>
                                                <span>Social</span></a>
                                </li>

                                <li class="header">Vendors</li>
                                <li class="{{ Request::segment(1) === 'elements' ? 'active' : null }}">
                                        <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>ui
                                                        Elements</span></a>
                                        <ul>
                                                <li
                                                        class="{{ Request::segment(2) === 'helperclass' ? 'active' : null }}">
                                                        <a href="{{route('elements.helperclass')}}">Helper Classes</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'bootstrap' ? 'active' : null }}">
                                                        <a href="{{route('elements.bootstrap')}}">Bootstrap UI</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'typography' ? 'active' : null }}">
                                                        <a href="{{route('elements.typography')}}">Typography</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a
                                                                href="{{route('elements.tabs')}}">Tabs</a></li>
                                                <li class="{{ Request::segment(2) === 'buttons' ? 'active' : null }}"><a
                                                                href="{{route('elements.buttons')}}">Buttons</a></li>
                                                <li class="{{ Request::segment(2) === 'icons' ? 'active' : null }}"><a
                                                                href="{{route('elements.icons')}}">Icons</a></li>
                                                <li
                                                        class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}">
                                                        <a href="{{route('elements.notifications')}}">Notifications</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a
                                                                href="{{route('elements.colors')}}">Colors</a></li>
                                                <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a
                                                                href="{{route('elements.dialogs')}}">Dialogs</a></li>
                                                <li class="{{ Request::segment(2) === 'listgroup' ? 'active' : null }}">
                                                        <a href="{{route('elements.listgroup')}}">List Group</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'mediaobject' ? 'active' : null }}">
                                                        <a href="{{route('elements.mediaobject')}}">Media Object</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a
                                                                href="{{route('elements.modals')}}">Modals</a></li>
                                                <li class="{{ Request::segment(2) === 'nestable' ? 'active' : null }}">
                                                        <a href="{{route('elements.nestable')}}">Nestable</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}">
                                                        <a href="{{route('elements.progressbars')}}">Progress Bars</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'rangesliders' ? 'active' : null }}">
                                                        <a href="{{route('elements.rangesliders')}}">Range Sliders</a>
                                                </li>
                                        </ul>
                                </li>
                                <li class="{{ Request::segment(1) === 'forms' ? 'active' : null }}">
                                        <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms
                                                        Elements</span></a>
                                        <ul>
                                                <li
                                                        class="{{ Request::segment(2) === 'formsbasic' ? 'active' : null }}">
                                                        <a href="{{route('forms.formsbasic')}}">Basic Elements</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}">
                                                        <a href="{{route('forms.advanced')}}">Advanced Elements</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'validation' ? 'active' : null }}">
                                                        <a href="{{route('forms.validation')}}">Form Validation</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a
                                                                href="{{route('forms.wizard')}}">Form Wizard</a></li>
                                                <li
                                                        class="{{ Request::segment(2) === 'dragdropupload' ? 'active' : null }}">
                                                        <a href="{{route('forms.dragdropupload')}}">Drag &amp; Drop
                                                                Upload</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'cropping' ? 'active' : null }}">
                                                        <a href="{{route('forms.cropping')}}">Image Cropping</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}">
                                                        <a href="{{route('forms.summernote')}}">Summernote</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a
                                                                href="{{route('forms.editors')}}">CKEditor</a></li>
                                                <li class="{{ Request::segment(2) === 'markdown' ? 'active' : null }}">
                                                        <a href="{{route('forms.markdown')}}">Markdown</a>
                                                </li>
                                        </ul>
                                </li>
                                <li class="{{ Request::segment(1) === 'tables' ? 'active' : null }}">
                                        <a href="#Tables" class="has-arrow"><i
                                                        class="fa fa-table"></i><span>Tables</span></a>
                                        <ul>
                                                <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a
                                                                href="{{route('tables.normal')}}">Normal Tables</a></li>
                                                <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}">
                                                        <a href="{{route('tables.datatable')}}">Jquery Datatables</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}">
                                                        <a href="{{route('tables.editable')}}">Editable Tables</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'tablecolor' ? 'active' : null }}">
                                                        <a href="{{route('tables.tablecolor')}}">Tables Color</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'filter' ? 'active' : null }}"><a
                                                                href="{{route('tables.filter')}}">Table Filter</a></li>
                                                <li class="{{ Request::segment(2) === 'dragger' ? 'active' : null }}"><a
                                                                href="{{route('tables.dragger')}}">Table dragger</a>
                                                </li>
                                        </ul>
                                </li>
                                <li class="{{ Request::segment(1) === 'charts' ? 'active' : null }}">
                                        <a href="#charts" class="has-arrow"><i
                                                        class="fa fa-pie-chart"></i><span>Charts</span></a>
                                        <ul>
                                                <li class="{{ Request::segment(2) === 'apex' ? 'active' : null }}"><a
                                                                href="{{route('charts.apex')}}">Apex Charts</a></li>
                                                <li class="{{ Request::segment(2) === 'c_chart' ? 'active' : null }}"><a
                                                                href="{{route('charts.c_chart')}}">C3 Charts</a></li>
                                                <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a
                                                                href="{{route('charts.morris')}}">Morris Charts</a></li>
                                                <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a
                                                                href="{{route('charts.flot')}}">Flot Charts</a></li>
                                                <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a
                                                                href="{{route('charts.chartjs')}}">ChartJS Charts</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'knob' ? 'active' : null }}"><a
                                                                href="{{route('charts.knob')}}">Knob Charts</a></li>
                                                <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}">
                                                        <a href="{{route('charts.sparkline')}}">Sparkline Charts</a>
                                                </li>
                                        </ul>
                                </li>

                                <li class="header">More Pages</li>
                                <li class="{{ Request::segment(2) === 'widget' ? 'active' : null }}"><a
                                                href="{{route('widgets.widget')}}"><i
                                                        class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                                </li>

                                <li class="{{ Request::segment(1) === 'pages' ? 'active' : null }}">
                                        <a href="#Pages" class="has-arrow"><i
                                                        class="fa fa-folder"></i><span>Pages</span></a>
                                        <ul>
                                                <li><a href="{{route('authentication.login')}}">Login</a></li>
                                                <li><a href="{{route('authentication.register')}}">Register</a></li>
                                                <li><a href="{{route('authentication.forgotpassword')}}">Forgot
                                                                Password</a></li>
                                                <li><a href="{{route('authentication.error404')}}">Page 404</a></li>
                                                <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a
                                                                href="{{route('pages.blank')}}">Blank Page</a></li>
                                                <li class="{{ Request::segment(2) === 'settings' ? 'active' : null }}">
                                                        <a href="{{route('pages.settings')}}">Settings</a>
                                                </li>
                                                <li
                                                        class="{{ Request::segment(2) === 'searchresults' ? 'active' : null }}">
                                                        <a href="{{route('pages.searchresults')}}">Search Results</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a
                                                                href="{{route('pages.profile')}}">Profile</a></li>
                                                <li class="{{ Request::segment(2) === 'invoices' ? 'active' : null }}">
                                                        <a href="{{route('pages.invoices')}}">Invoices</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}"><a
                                                                href="{{route('pages.gallery')}}">Image Gallery</a></li>
                                                <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}">
                                                        <a href="{{route('pages.timeline')}}">Timeline</a>
                                                </li>
                                                <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a
                                                                href="{{route('pages.pricing')}}">Pricing</a></li>
                                        </ul>
                                </li>
                                <li class="{{ Request::segment(2) === 'vectormap' ? 'active' : null }}"><a
                                                href="{{route('map.vectormap')}}"><i class="fa fa-map"></i>
                                                <span>jVector Maps</span></a></li>

                                <li class="extra_widget">
                                        <div class="form-group">
                                                <label class="d-block">Traffic this Month <span
                                                                class="float-right">77%</span></label>
                                                <div class="progress progress-xxs">
                                                        <div class="progress-bar progress-bar-success"
                                                                role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 77%;"></div>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label class="d-block">Server Load <span
                                                                class="float-right">50%</span></label>
                                                <div class="progress progress-xxs">
                                                        <div class="progress-bar progress-bar-warning"
                                                                role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 50%;"></div>
                                                </div>
                                        </div>
                                </li>