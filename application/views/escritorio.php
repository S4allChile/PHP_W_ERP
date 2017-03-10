

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->
    <script>
        function mueveReloj(){
            momentoActual = new Date();
            hora = momentoActual.getHours();
            minuto = momentoActual.getMinutes();
            segundo = momentoActual.getSeconds();
            
            str_segundo = new String (segundo);
            if (str_segundo.length == 1){
                segundo = "0" + segundo;
            }
            str_minuto = new String (minuto);
            if (str_minuto.length == 1){
                minuto = "0" + minuto;
            }
            str_hora = new String (hora);
            if (str_hora.length == 1){
                hora = "0" + hora;
            }
            
            horaImprimible = hora+":"+minuto+":"+segundo;
            
            document.getElementById('hora').innerHTML = horaImprimible;
            
            setTimeout("mueveReloj()",1000);
        }
    </script>
    <div class="contentpanel">

      <div class="row">
        <div class="col-md-9 col-lg-8 dash-left">
          
            <div class="row panel-quick-page">
            <div class="col-xs-4 col-sm-5 col-md-3 page-user">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Clientes y Proveedores</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-person-stalker"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-3 page-products">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Productos y Servicios</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="fa fa-shopping-cart"></i></div>
                </div>
              </div>
            </div>
            
            <div class="col-xs-4 col-sm-3 col-md-3 page-messages">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Notas de Venta</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-email"></i></div>
                </div>
              </div>
            </div>
                <div class="col-xs-4 col-sm-3 col-md-3 page-events">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Proyectos</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-ios-calendar-outline"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-5 col-md-3 page-reports">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Reportes</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-arrow-graph-up-right"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-3 page-statistics">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Contabilidad</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-ios-pulse-strong"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-3 page-privacy">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Usuarios</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-android-lock"></i></div>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-3 page-settings">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Factura Electronica</h4>
                </div>
                <div class="panel-body">
                  <div class="page-icon"><i class="icon ion-gear-a"></i></div>
                </div>
              </div>
            </div>
          </div><!-- row -->

          <div class="row panel-statistics">
            <div class="col-sm-6">
              <div class="panel panel-updates">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-7 col-lg-8">
                      <h4 class="panel-title text-success">Cotizaciones sin Cerrar</h4>
                      <h3>75.7%</h3>
                      <div class="progress">
                        <div style="width: 75.7%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75.7" role="progressbar" class="progress-bar progress-bar-success">
                          <span class="sr-only">75.7% Complete (success)</span>
                        </div>
                      </div>
                      <p>Added products for this month: 75</p>
                    </div>
                    <div class="col-xs-5 col-lg-4 text-right">
                      <input type="text" value="75" class="dial-success">
                    </div>
                  </div>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->

            <div class="col-sm-6">
              <div class="panel panel-danger-full panel-updates">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-7 col-lg-8">
                      <h4 class="panel-title text-warning">Notas de Credito</h4>
                      <h3>39.9%</h3>
                      <div class="progress">
                        <div style="width: 39.9%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="39.9" role="progressbar" class="progress-bar progress-bar-warning">
                          <span class="sr-only">39.9% Complete (success)</span>
                        </div>
                      </div>
                      <p>Rejected products for this month: 45</p>
                    </div>
                    <div class="col-xs-5 col-lg-4 text-right">
                      <input type="text" value="45" class="dial-warning">
                    </div>
                  </div>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->

            <div class="col-sm-6">
              <div class="panel panel-success-full panel-updates">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-7 col-lg-8">
                      <h4 class="panel-title text-success">Pedidos sin Facturar</h4>
                      <h3>55.4%</h3>
                      <div class="progress">
                        <div style="width: 55.4%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55.4" role="progressbar" class="progress-bar progress-bar-info">
                          <span class="sr-only">55.4% Complete (success)</span>
                        </div>
                      </div>
                      <p>Sold products for this month: 1,203</p>
                    </div>
                    <div class="col-xs-5 col-lg-4 text-right">
                      <input type="text" value="55" class="dial-info">
                    </div>
                  </div>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->

            <div class="col-sm-6">
              <div class="panel panel-updates">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-7 col-lg-8">
                      <h4 class="panel-title text-danger">Facturas sin Pago</h4>
                      <h3>22.1%</h3>
                      <div class="progress">
                        <div style="width: 22.1%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="22.1" role="progressbar" class="progress-bar progress-bar-danger">
                          <span class="sr-only">22.1% Complete (success)</span>
                        </div>
                      </div>
                      <p>Returned products this month: 22</p>
                    </div>
                    <div class="col-xs-5 col-lg-4 text-right">
                      <input type="text" value="22" class="dial-danger">
                    </div>
                  </div>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->

          </div><!-- row -->

          <div class="row row-col-join panel-earnings">
            <div class="col-xs-3 col-sm-4 col-lg-3">
              <div class="panel">
                <ul class="panel-options">
                  <li><a><i class="glyphicon glyphicon-option-vertical"></i></a></li>
                </ul>
                <div class="panel-heading">
                  <h4 class="panel-title">Resumen de Ventas</h4>
                </div>
                <div class="panel-body">
                  <h3 class="earning-amount">$1,543.03</h3>
                  <h4 class="earning-today">Este Mes Llevamos</h4>

                  <ul class="list-group">
                    <li class="list-group-item">Mes Anterior <span class="pull-right">$12,320.34</span></li>
                    <li class="list-group-item">Total Año <span class="pull-right">$37,520.34</span></li>
                  </ul>
                  <hr class="invisible">
                  <p>Total items vendidos este mes: 325</p>
                </div>
              </div><!-- panel -->
            </div>
            <div class="col-xs-9 col-sm-8 col-lg-9">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Ventas Anuales</h4>
                </div>
                <div class="panel-body">
                  <div id="line-chart" class="body-chart"></div>
                </div>
              </div>
            </div>
          </div>
          
          
          

          
          
          <div class="panel panel-announcement">
            <ul class="panel-options">
              <li><a><i class="fa fa-refresh"></i></a></li>
              <li><a class="panel-remove"><i class="fa fa-remove"></i></a></li>
            </ul>
            <div class="panel-heading">
              <h4 class="panel-title">Ultimos Anuncios</h4>
            </div>
            <div class="panel-body">
              <h2>A new admin template has been released by <span class="text-primary">ThemePixels</span> with a name <span class="text-success">Quirk</span> is now live and available for purchase!</h2>
              <h4>Explore this new template and see the beauty of Quirk! <a href="">Take a Tour!</a></h4>
            </div>
          </div><!-- panel -->
          
          
          
          
          

        </div><!-- col-md-9 -->
        <div class="col-md-3 col-lg-4 dash-right">
          <div class="row">
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-danger panel-weather">
                <div class="panel-heading">
                  <h4 class="panel-title">Datos Informativos</h4>
                </div>
                <div class="panel-body inverse">
                  <div class="row mb10">
                    <div class="col-xs-6">
                        <h2 class="today-day"><?= strtoupper($nombreDia); ?></h2>
                      <h3 class="today-date"><?= $mesDiaAno; ?></h3>
                    </div>
                      <div class="col-xs-6" >
                          <h2 class="today-day" id="hora">
                        <script language="javascript">
                        
                            mueveReloj();
                            
                        </script>
                        </h2>
                    </div>
                  </div>
                  <p class="nomargin"> </p>
                  <div class="row mt10">
                    <div class="col-xs-6">
                        <strong>Dolar :</strong> <?= indicadores('DOLAR'); ?>
                    </div>
                    <div class="col-xs-6">
                        <strong>U.F :</strong> <?= indicadores('UF'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- col-md-12 -->
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-primary list-announcement">
                <div class="panel-heading">
                  <h4 class="panel-title">Tareas Pendientes</h4>
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled mb20">
                    <li>
                      <a href="">Testing Credit Card Payments on...</a>
                      <small>June 30, 2015 <a href="">7 shares</a></small>
                    </li>
                    <li>
                      <a href="">A Shopping Cart for New and...</a>
                      <small>June 15, 2015 &nbsp; <a href="">11 shares</a></small>
                    </li>
                    <li>
                      <a href="">A Shopping Cart for New and...</a>
                      <small>June 15, 2015 &nbsp; <a href="">2 shares</a></small>
                    </li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <button class="btn btn-primary btn-block">View More Announcements <i class="fa fa-arrow-right"></i></button>
                </div>
              </div>
            </div><!-- col-md-12 -->
          </div><!-- row -->

          

        </div><!-- col-md-3 -->
      </div><!-- row -->

    </div><!-- contentpanel -->


