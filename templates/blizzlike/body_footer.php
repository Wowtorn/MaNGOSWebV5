<?php
/****************************************************************************/
/*  						< Emerald Sanctum >  							*/
/*              Copyright (C) <2018> <emeraldsanctum.com>   		        */
/*					  < https://emeraldsanctum.com >					 	*/
/*																			*/
/*			Origional MangosWeb v4 (C) 2017 Mistvale.com					*/
/*			Original MangosWeb Enhanced (C) 2010-2011 KeysWow				*/
/*			Original MangosWeb (C) 2007, Sasha, Nafe, TGM, Peec				*/
/****************************************************************************/

?>                                                            
                                                            <!-- Component body END -->
                                                            </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div id="cnt-bot">
                                                        <div>
                                                          <div>&nbsp;</div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </td>
<?php 
                        if((empty($_GET['p']) || $_GET['p'] == "frontpage") && !isset($_GET['module']))
                        {
                            echo "<td valign=\"top\">";
                            include($Template['script_path'].'/body_right.php');
                            echo "</td>";
                        } 
?>
                                                </tr>
                                              </table>                      
                                            </div>
                                          </div>
                                        </div>
                                        <div style="clear: both; font-size: 1px;">&nbsp;</div>
                                        <center>
                                          <div id="copyright">
										  <div id="blizzlogo-bot">
                                              <img alt="Blizzard.com" border="0" src="<?php echo $Template['path'];?>/images/bot-blizzlogo.gif"/></div>
                                            <span class="textlinks">
                                            <small>
												<?php echo $lang['pagegenerated'];?> <?php echo round(PAGE_LOAD_TIME, 4);?> sec.
												Query's: (RDB: <?php echo $DB->_statistics['count']; ?>,
												WDB: <?php echo $WDB->_statistics['count']?>,
												CDB: <?php echo $CDB->_statistics['count']?>)<br/>
												<b>&copy; <?php echo (string)$Template['copyright']; ?></b>
												<br /><b><?php echo $Core->copyright; ?></b>
												<br/>
                                            </small>
											</span>
											<br><br><br>
                                          </div>
                                        </center>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div id="main-bottom">
                                        <div>
                                          <div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <!-- Statue left side
							<div style="position: relative; z-index: 10;">
                              <img style="position: absolute; top: -878px; left: -543px;" alt="statue" src="./<?php echo $Template['path']; ?>/images/statue.png"/></div>
                          </div>
						  -->
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </center>
    <div id="ironframe" style="z-index: 11;"></div>
    <div id="pageend"></div>
  </body>
</html>