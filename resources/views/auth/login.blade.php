<!DOCTYPE html>
<!--
Copyright (c) 2012-2014 Adobe Systems Incorporated. All rights reserved.
Licensed to the Apache Software Foundation (ASF) under one
or more contributor license agreements.  See the NOTICE file
distributed with this work for additional information
regarding copyright ownership.  The ASF licenses this file
to you under the Apache License, Version 2.0 (the
"License"); you may not use this file except in compliance
with the License.  You may obtain a copy of the License at
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing,
software distributed under the License is distributed on an
"AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
KIND, either express or implied.  See the License for the
specific language governing permissions and limitations
under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/index.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="js/index.js"></script>
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            
            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <div id="logo_bosque">
                    <img src="img/ubosque_logo.png" height="70%" width="70%">
                </div>
                <div class="panel panel-default" >
                    <div class="panel-body" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="userName" class="form-control" name="userName" value="{{ old('userName') }}">
							
							  @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                             
							  <input type="password" class="form-control" name="password">
							  
							  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls menu_botones">
                                 <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-log-in"></i>Iniciar Sesión
                                </button>
                                    <br><br>
                                   
									 <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Has olvidado tu cotraseña?</a>
                                </div>
                            </div>
                        </form>
                        <div>
                            <center><p>Ver Ubicaciones</p></center>
                            <div>
                                <center><a href="indexPasajero.html" id="olvido_contra">Passenger</a>
                                    <br><br>
                                    <a href="indexConductor.html" id="olvido_contra">Bus</a></center>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles"></div>
    </body>
</html>