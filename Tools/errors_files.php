<?php
   if(isset($error) && count($error) !=0)
                             {
                                echo '<div style="margin-left: 50px;margin-right: 50px" class="alert alert-danger alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                      
                                foreach ($error as $ele)
                                {
                                    echo $ele.'<br>';
                                }
                                echo '</div>';
                            }
