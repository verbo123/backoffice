<?php
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Listview</h1>

                        <div class="actions">
                            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="toolbar">
                        <div class="toolbar__label"><span class="hidden-xs-down">Total</span> 324 Records</div>

                        <div class="actions">
                            <i class="actions__item zmdi zmdi-search" data-sa-action="toolbar-search-open"></i>
                            <a href="#" class="actions__item zmdi zmdi-time"></a>
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-sort" data-toggle="dropdown"></i>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Last Modified</a>
                                    <a href="#" class="dropdown-item">Name</a>
                                    <a href="#" class="dropdown-item">Size</a>
                                </div>
                            </div>
                            <a href="#" class="actions__item zmdi zmdi-help-outline"></a>
                        </div>

                        <div class="toolbar__search">
                            <input type="text" placeholder="Search...">
                            <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic example</h4>
                            <h6 class="card-subtitle">Basic listing with checkbox and text.</h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>
    
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</p>
                                </div>
                            </div>
    
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Dulla vel metus scelerisque ante sollicitudin commodo purus odio</p>
                                </div>
                            </div>
     
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Per an error perpetua, fierent fastidii recteque ad pro. Mei id brute intellegam</p>
                                </div>
                            </div>
    
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Wel ea elit iuvaret. Mea labitur definitiones ex, id atqui accusata vix, vim nibh mandamus ad</p>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix mb-3"></div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Headings</h4>
                            <h6 class="card-subtitle">Heading text can be added by wrapping the content on <code>.listview__heading</code></h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Attributes</h4>
                            <h6 class="card-subtitle">You can also display information as attributes.</code></h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>

                                    <div class="listview__attrs">
                                        <span>Date Created: 09/06/1988</span>
                                        <span>Members: 78954</span>
                                        <span>Published: No</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>

                                    <div class="listview__attrs">
                                        <span>Comedy</span>
                                        <span>Reviewed</span>
                                        <span>5 Stars</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>

                                    <div class="listview__attrs">
                                        <span>James Anderson</span>
                                        <span>Software Developer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>

                                    <div class="listview__attrs">
                                        <span>1988</span>
                                        <span>December</span>
                                        <span>1990</span>
                                        <span>10:12 PM</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>

                                    <div class="listview__attrs">
                                        <span>Toyota</span>
                                        <span>Hilux</span>
                                        <span>Revo</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Media</h4>
                            <h6 class="card-subtitle">Add image or character as a media entry.</h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <i class="avatar-char">A</i>

                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <i class="avatar-char">C</i>

                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>

                                <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Action links</h4>
                            <h6 class="card-subtitle">Add actions links using <code>.actions</code></h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                                <div class="actions listview__actions">
                                    <i class="actions__item zmdi zmdi-delete"></i>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                                <div class="actions listview__actions">
                                    <i class="actions__item zmdi zmdi-edit"></i>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                                <div class="actions listview__actions">
                                    <i class="actions__item zmdi zmdi-share"></i>
                                    <i class="actions__item zmdi zmdi-delete"></i>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Edit</a>
                                            <a href="#" class="dropdown-item">Share</a>
                                            <a href="#" class="dropdown-item">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Hoverable list items</h4>
                            <h6 class="card-subtitle">Use class <code>.listview--hover</code> on <code>.listview</code> to make list items hoverable.</h6>
                        </div>

                        <div class="listview listview--hover">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped rows</h4>
                            <h6 class="card-subtitle">Use class <code>.listview--striped</code> on <code>.listview</code> to make list items striped.</h6>
                        </div>

                        <div class="listview listview--striped">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bordered</h4>
                            <h6 class="card-subtitle">Use class <code>.listview--bordered</code> on <code>.listview</code> to make list items Bordered.</h6>
                        </div>

                        <div class="listview listview--bordered">
                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Dulla vel metus scelerisque ante sollicitudin commodo purus odio</div>
                                    <p>Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Finibus consectetur mauris, eget laoreet turpis malesuada eredeu lectus sed enim suscipit euismod</div>
                                    <p>Aliquam fringilla neque sit amet libero convallis ac consequat nulla iaculis urabitur placerat mi sed massa euismod, a tincidunt enim tinciduntam porttitor lorem ac pharetra semper</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Vestibulum cursus eros id ipsum finibus a pretium justo aliquam</div>
                                    <p>Etiam cursus lorem eget sapien euismod, ac elementum urna tempusonec dapibus</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Nunc erat nunc ullamcorper sit amet odio vel accumsan viverra velit aliquam fringilla neque sit amet libero convallis, ac consequat nulla iaculis.</div>
                                    <p>Suspendisse aliquam sapien vitae elit ornare accumsan in dictum eratraesent pulvinar eros</p>
                                </div>
                            </div>

                            <div class="listview__item">
                                <label class="custom-control custom-checkbox align-self-start">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                </label>
                                <div class="listview__content">
                                    <div class="listview__heading">Pellentesque vitae leo vestibulum odio mollis porta blandit eget nunc</div>
                                    <p>Suspendisse ullamcorper purus efficitur lorem hendrerit, rhoncus dignissim lorem vehicula</p>
                                </div>
                            </div>

                            <div class="clearfix mb-3"></div>
                        </div>
                    </div>
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Homepage</a>

                        <a class="nav-link" href="#">Company</a>

                        <a class="nav-link" href="#">Support</a>

                        <a class="nav-link" href="#">News</a>

                        <a class="nav-link" href="#">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:38:45 GMT -->
</html>