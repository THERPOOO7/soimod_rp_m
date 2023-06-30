<?php include('header.php');?>
  <style>
    .prpcess_section{
        background-color: #272740;
        padding: 50px 0px;
       
    }
    .block_process_section{
        width: 100%;
        background-color: #5D17EB;
        border-radius: 100px;
        padding: 30px;
        color: #fff;
        margin: 20px 0px;
    }
    .round_circle{
        background-color: #dbd8d8;
        width: 100px;
        height: 100px;
        border-radius: 50px;
        padding: 10px;
    }
    .round_circle span{
        background-color: blue;
    }
    .block_iner{
        display: flex;
    /* justify-content: space-between; */
    align-items: center;
    }
    .round_circle_small{
        background-color: #fff;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #5D17EB;
    font-size: 34px;
    font-weight: 700;
    }
    .flexbility_block{
        background-color: #004AAC;
    }
    .flexbility_block .round_circle_small{
        color: #004AAC;
    }
    .Schematic_design{
        background-color: #8B52FF;
    }
    .Schematic_design .round_circle_small{
        color: #8B52FF;
    }
    .zoning_block{
        background-color:#5270FF;
    }
    .zoning_block .round_circle_small{
        color: #5270FF;
    }
    .study_badges{
        background-color: #004AAC;
    }
    .study_badges .round_circle_small{
        color: #004AAC;
    }
    .design_block{
        background-color: #0CBFDE;
    }
    .design_block .round_circle_small{
        color: #0CBFDE;

    }
    .plans_block{
        background-color: #37B5FF;
    }
    .plans_block .round_circle_small{
        color:#37B5FF
    }
    .manufacture_block{
        background:#A3D6DA
    }
    .manufacture_block .round_circle_small{
        color: #A3D6DA;
    }
    .delivery_close{
        background-color: #B5B12B;
    }
    .delivery_close .round_circle_small{
        color: #B5B12B;
    }
    .plans_block .round_circle{
        margin-right: 20px;
    }
    .delivery_close .round_circle{
        margin-right: 20px;
    }
    .zoning_block .round_circle{
        margin-right: 20px;
    }
    .study_badges .round_circle{
        margin-right: 20px;
    }
    .main_consulatyion .block_iner{
        justify-content: space-between;
    }
    .Schematic_design .block_iner{
        justify-content: space-between;
    }
    .main_process_content{
        display: flex;
        justify-content: end;
        align-items: center;
    }.prpcess_section .row{
        align-items: center;
    }
    .weekend_text h3{
        color:#fff;
        font-weight: 400;
        font-size:30px;
        margin-right: 20px;
    }
    
    .dots_section{
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: #fff;
    }
    .border_section{
        width: 150px;
        border: 1.5px dashed #fff;
    }
    .inner_text{
        padding: 0px 20px;
    }
    .inner_text h5{
        font-size:20px;
        font-weight: 500;
    }
    @media only screen and (max-width:1024px) and (min-width:768px){
        .border_section {
            width:50px;
        }
        .weekend_text h3{
            font-size: 17px;
            margin-right: 10px;
        }
        .block_process_section{
            padding: 17px 22px;
        }
    }
    @media only screen and (max-width:767px) and (min-width:320px){
        .round_circle{
            margin: auto;
            width: 60px;
            height: 60px;
        }
        .block_iner{
            display: block;
        }
        .round_circle_small{
            width: 40px;
            height: 40px;
        }
        .study_badges .round_circle{
            margin: auto;
        }
        .delivery_close .round_circle{
            margin: auto;
        }
        .zoning_block .round_circle{
            margin: auto;
        }
        .plans_block .round_circle{
            margin: auto;
        }
        .round_circle_small{
            font-size: 22px;
        }
        .row_reverese_section{
            flex-direction: column-reverse;
            display: flex;
        }
        .weeks_reverese_3reverse{
            flex-direction: column-reverse;
        }
        .block_process_section{
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0px;
        }
        .inner_text{
            text-align: center;
            margin: 10px 0px;
        }
        .weekend_text{
            margin: 10px 0px;
        }
        .weekend_text h3{
            font-size: 16px;
            margin-bottom: 0px;
        } 
        .inner_text h5 {
            font-size: 16px;
        }
        .inner_text p{
            margin-bottom: 0px;
        }
        
    }
  </style>
</head>
<body>
    <div class="container-fluid px-0">
        <div class="prpcess_section">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-7 col-md-10">
                        <div class="block_process_section main_consulatyion">
                          <div class="block_iner row_reverese_section">
                            <div class="inner_text">
                                <h5>Consulation</h5>
                                <p>Your Goal for the ADU Budget and Timeline</p>
                            </div>
                            <div class="round_circle">
                                <div class="round_circle_small">1</div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row weeks_reverese_3reverse">
                    <div class="col-lg-5 col-md-3">
                      <div class="main_process_content">
                        <div class="weekend_text">
                            <h3>1 Week</h3>
                        </div>
                        <div class="dots_section">
                        </div>
                        <div class="border_section"></div>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section study_badges">
                          <div class="block_iner">
                            <div class="round_circle">
                                <div class="round_circle_small">2</div>
                            </div>
                            <div class="inner_text">
                                <h5>Feasibility Study</h5>
                                <p>Examine city/county zoning ordinances. 
                                    Site evaluation for general accessibility, 
                                    utility placement, massing, logistic & craning. 
                                    Modeling concept.</p>
                            </div>
                           
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                   
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section Schematic_design">
                          <div class="block_iner row_reverese_section">
                            <div class="inner_text">
                                <h5>Schematic Design</h5>
                                <p>Schematic design for zoning approval.</p>
                            </div>
                            <div class="round_circle">
                                <div class="round_circle_small">3</div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                         
                         
                          <div class="border_section"></div>
                          <div class="dots_section">
                        </div>
                          <div class="weekend_text ml-3">
                            <h3>3 Weeks</h3>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="row weeks_reverese_3reverse">
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                          <div class="weekend_text">
                              <h3>5-6 Weeks</h3>
                          </div>
                          <div class="dots_section">
                          </div>
                          <div class="border_section"></div>
                        </div>
                      </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section zoning_block">
                          <div class="block_iner">
                            <div class="round_circle">
                                <div class="round_circle_small">4</div>
                            </div>
                            <div class="inner_text">
                                <h5>Zoning Approval</h5>
                                <p>Zoning approval from city/county. 
                                    (may take longer)</p>
                            </div>
                           
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section design_block">
                          <div class="block_iner row_reverese_section">
                            <div class="inner_text">
                                <h5>Design and Engineering Plans</h5>
                                <p>Prepares architectural and engineering 
                                    plans for submittal to city/county and 
                                    CA HCD.</p>
                            </div>
                            <div class="round_circle">
                                <div class="round_circle_small">5</div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                         
                          <div class="border_section"></div>
                          <div class="dots_section">
                        </div>
                          <div class="weekend_text ml-3">
                            <h3> 4 - 6 Weeks</h3>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="row weeks_reverese_3reverse">
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                          <div class="weekend_text">
                              <h3>5 - 7 Weeks</h3>
                          </div>
                          <div class="dots_section">
                          </div>
                          <div class="border_section"></div>
                        </div>
                      </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section plans_block">
                          <div class="block_iner">
                            <div class="round_circle">
                                <div class="round_circle_small">6</div>
                            </div>
                            <div class="inner_text">
                                <h5>Plans Approval and Permits</h5>
                                <p>Work with city/county to obtain necessary 
                                    permits. 
                                    <br>Approval for CA HCD 
                                    <br>(may take longer)</p>
                            </div>
                           
                          </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section manufacture_block">
                          <div class="block_iner row_reverese_section">
                            <div class="inner_text">
                                <h5>Manufacturing and Construction</h5>
                                <p>With CA HCD approval, manufacturing begins. During the manufacturing, site preparation and foundation take place. Necessary permits obtained.</p>
                            </div>
                            <div class="round_circle">
                                <div class="round_circle_small">7</div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                        
                       
                          <div class="border_section"></div>
                          <div class="dots_section">
                        </div>
                          <div class="weekend_text ml-3">
                            <h3>10-14 Weeks</h3>
                        </div>
                        </div>
                      </div>
                </div>
                <div class="row weeks_reverese_3reverse">
                    <div class="col-lg-5 col-md-3">
                        <div class="main_process_content">
                          <div class="weekend_text">
                              <h3>1 - 2 Weeks</h3>
                          </div>
                          <div class="dots_section">
                          </div>
                          <div class="border_section"></div>
                        </div>
                      </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="block_process_section delivery_close">
                          <div class="block_iner">
                            <div class="round_circle">
                                <div class="round_circle_small">8</div>
                            </div>
                            <div class="inner_text">
                                <h5>Delivery and Close-up</h5>
                                <p>Finished modular delivered to the site for 
                                    placement and close-ups. 
                                    Dream ADU is ready for move-in.</p>
                            </div>
                           
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php include('Footer.php');?>