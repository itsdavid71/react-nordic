
		<style>
		
			/* #technologies h2 {
			  background: #2a284f;
			  color: white;
			  padding: 20px 0;
			  box-shadow: 1px -1px 0 4px #fcfdfd;
			  text-align: center;
			  text-transform: uppercase;
			}

			@media (max-width: 450px) {
			  #technologies h2 {
				font-size: 1.6rem;
			  }
			}

			.technologies-all {
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  flex-basis: 50%;
			  max-width: 50%;
			  -webkit-flex-wrap: wrap;
				  -ms-flex-wrap: wrap;
					  flex-wrap: wrap;
			}

			@media (max-width: 800px) {
			  .technologies-all {
				max-width: 100%;
				flex-basis: 100%;
			  }
			}

			.technologies-item {
			  border: 4px solid #2a284f;
			  width: 250px;
			  height: 250px;
			  margin: 5px;
			  background-size: 60%;
			  background-position: center;
			  background-repeat: no-repeat;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  background-color: #f5f5f5;
			}

			@media (max-width: 800px) {
			  .technologies-item {
				width: 80px;
				height: 80px;
			  }
			}

			@media (max-width: 450px) {
			  .technologies-item {
				width: 70px;
				height: 70px;
			  }
			}

			.technologies-item .technologies-item-short-info {
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-flex-basis: 100%;
				  -ms-flex-preferred-size: 100%;
					  flex-basis: 100%;
			  -webkit-align-content: flex-end;
				  -ms-flex-line-pack: end;
					  align-content: flex-end;
			  background: rgba(42, 40, 79, 0);
			  transition: 0.3s all;
			  cursor: pointer;
			}

			.technologies-item .technologies-item-short-info div {
			  margin: auto;
			  color: white;
			  font-size: 1.3rem;
			  opacity: 0;
			  transition: 0.3s all;
			  -webkit-user-select: none;
				 -moz-user-select: none;
				  -ms-user-select: none;
					  user-select: none;
			  text-align: center;
			}

			.technologies-item .technologies-item-short-info:hover {
			  background: rgba(42, 40, 79, 0.82);
			}

			.technologies-item .technologies-item-short-info:hover div {
			  opacity: 1;
			}

			.technologies-block {
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  padding: 40px;
			}

			@media (max-width: 800px) {
			  .technologies-block {
				display: block;
				padding: 10px;
			  }
			}

			@media (max-width: 450px) {
			  .technologies-block {
				display: block;
				padding: 10px;
			  }
			}

			.technologies-info {
			  flex-basis: 50%;
			  color: white;
			  -webkit-flex-grow: 2;
				  -ms-flex-positive: 2;
					  flex-grow: 2;
			  max-width: 50%;
			  background: #2a284f;
			  padding: 20px;
			  position: relative;
			  margin-left: 20px;
			}
			
			.technologies-info:after {
				content: "technology";
				text-transform: uppercase;
				color: rgba(255, 255, 255, 0.1);
				font-size: 77px;
				bottom: -20px;
				left: 20px;
				position: absolute;
			}
			
			@media (max-width: 800px) {
				.technologies-info:after {
					content: "";
				}
			}

			@media (max-width: 800px) {
			  .technologies-info {
				max-width: 100%;
				margin: 30px 0;
			  }
			}

			.technologies-info h3 {
			  margin-bottom: 10px;
			  font-size: 2rem;
			}

			.technologies-info p {
			  margin-top: 10px;
			}

			.technologies-info:before {
			  content: "";
			  position: absolute;
			  width: 40px;
			  height: 40px;
			  background: #2a284f;
			  left: -20px;
			  top: 40px;
			  -webkit-transform: rotate(135deg);
				  -ms-transform: rotate(135deg);
					  transform: rotate(135deg);
			}

			@media (max-width: 800px) {
			  .technologies-info:before {
				left: 50px;
				top: -20px;
			  }
			}

			.item-full-info {
			  display: none;
			}

			.item-full-info-header {
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-align-content: center;
				  -ms-flex-line-pack: center;
					  align-content: center;
			}

			.item-full-info-header .item-full-info-header-pic {
			  background-size: contain;
			  background-position: center;
			  background-repeat: no-repeat;
			  width: 40px;
			  height: 40px;
			  margin-right: 10px;
			}
			.technologies-full-info {
				
			}
			.technologies-full-info p, .technologies-full-info > div {
				color: #2a284f;
                position: relative;
                padding: 20px 40px;
                background: rgb(253, 201, 49);
                font-size: 20px;
			}
			.technologies-full-info > div:first-child {
				background: #fdc931;
				padding: 40px 40px 60px;
                font-weight: bold;
                background: url(../images/decor/binary_pattern.svg);
			}


            .info-header:before {
                content: "";
                position: absolute;
                width: 40px;
                height: 40px;
                background: url(/images/decor/down-dotted-arrow.svg) center center/contain no-repeat;
                bottom: -32px;
                left: 18px;
			}
			@media (max-width: 450px) {
			  .technologies-full-info {
				padding: 0 20px 40px 20px;
			  }
            }
            
            .info-header {
                background: white;
                padding: 10px;
                font-size: 1.5rem;
                display: inline-block;
                position: relative;
                margin-bottom: 40px;
                border: 2px solid #2a284f;
            }
            .info-header-block {
                display: block;
                position: relative;
            }
            .no-red {
                padding: 3px;
                color: red;
            }
            .info-header-block {
                display: flex;
                flex-direction: column;
            }
            .course-block-important {
                background: white;
                padding: 20px;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                border-left: 2px dashed #2a284f;
                border-bottom: 2px dashed #2a284f;
                min-width: 50%;
                box-sizing: border-box;
            }
            .course-block-important:nth-child(odd), .arrow-bottom-show .course-block-important {
                border-right: 2px dashed #2a284f;
            }

            .course-block-important-header {
                background: #2a284f;
                color: white;
                padding: 10px;
                box-sizing: border-box;
                min-width: 100%;
            }
            .course-block-important-pic {
                min-width: 60px;
                min-height: 60px;
                margin-right: 20px;
            }
            .course-block-important-text {
                font-size: 1.6rem;
            }
            .course-block-important-text a  {
                font-size: 1rem;
            }
            .info-header-block-item {
                display: flex;
                flex-wrap: wrap;
            }
            .course-block-important-line {
                flex-grow: 1;
                flex-basis: 150px;
            }
            .arrow-bottom-show {
                margin-bottom: 40px;
                position: relative;
            }
            .arrow-bottom-show:after {
                content: "";
                position: absolute;
                width: 40px;
                height: 40px;
                background: url(/images/decor/down-dotted-arrow.svg) center center/contain no-repeat;
                bottom: -32px;
                left: 18px;
            }
            .big-question {
                font-size: 43rem;
                line-height: 33rem;
                user-select: none;
                position: relative;
                font-family: "Roboto Condensed";
                box-sizing: border-box;
                min-width: 30%;
            }
            .big-question div {
                font-size: 5rem;
                color: white;
                position: absolute;
                bottom: 28px;
                line-height: 4rem;
                font-family: "Roboto Condensed";
                color: #2a284f;
            }
            .big-question div span:nth-child(1) {
                font-size: 7rem;
                display: block;
                line-height: 5rem;
            }
            .big-question div span:nth-child(2) {
                font-size: 9rem;
                display: block;
                line-height: 4rem;
            }
            .wrap {
                flex-wrap: wrap;
                border-top: 4px solid #2a284f;
                border-bottom: 4px solid #2a284f;
            }
            .all-techs {
                box-sizing: border-box;
                min-width: 70%;
                flex-grow: 1;
                flex-basis: 500px;
            } */
						* {
							margin: 0;
							padding: 0;
							bottom: 0;
							
						}
						.wrap {
                flex-wrap: wrap;
                border-top: 4px solid #2a284f;
                border-bottom: 4px solid #2a284f;
            }
						.technologies-full-info {
							background: #fdca3142;
								padding: 40px 40px 60px;
                font-weight: bold;
								height: 1000px;
                background: url("images/decor/binary_pattern.svg");
						}
						.big-question {
							font-size: 43rem;
                line-height: 33rem;
                user-select: none;
                position: relative;
                font-family: "Roboto Condensed";
                box-sizing: border-box;
                min-width: 30%;
								/* padding: 300px 0; */
								color: #fdc931
						}
						.big-question-text {
							padding-top: 300px;
							position: relative;
						}
						
						.big-question div {
							/* position: absolute; */
						}
						.big-question-block {
							font-size: 27rem;
							right: 150px;
							top: -100px;
							position: absolute !important;
						}
						.big-question span{
							font-size: 10rem;
							color: #2a284f;
							line-height: 140px;
							display: block;
							text-align: left;
							font-weight: 500;
						}
						.big-question div .one {
							font-size: 7rem;
							padding-left: 10px;
							line-height: 106px;
							font-weight: 400;
						}
						.big-question div .three {
							font-size: 13rem;
							font-weight: 600;
							line-height: 134px;
						}
						.flex {
							display: flex;
						}
						.technologies-blocks, .technologies-blocks * {
							font-family: "Roboto Condensed";
						}
						.technologies-blocks-attention {
							border: 3px solid #fdc931;
							box-sizing: border-box;
							/* overflow: hidden; */
							padding: 40px 80px;
							background: #fff;
							color: #2a284f;
							margin: 50px 0;
							position: relative;
						}
						.technologies-blocks-attention:before {
							content: "!";
							position: absolute;				
							font-size: 13rem;
							color: #fdc931;
							right: -60px;
    					top: -60px;
						}
						.technologies-blocks-attention:after {
							position: absolute;
							content: "";
							width: 100%;
							height: 15px;
							background: #fdc931;
							left: 0;
							right: 0;
							margin: 0 auto;
							top: -25px;
						}
						.technologies-blocks-attention span:first-child {
							font-size: 30px;
							position: relative;
						}
						.technologies-blocks-attention span:first-child::before {
							content: "";
							position: absolute;
							width: 200%;
							right: -220%;
							top: 17px;
							/* bottom: 0; */
							height: 4px;
							background: #fdc931;
						}
						.technologies-blocks-attention-red {
							background: #ff3a3a;
							color: white;
							padding: 2px 5px;
							margin: 0 5px;
						}
						.technologies-blocks-blue {
							border: 3px solid #2a284f;
							box-sizing: border-box;
							/* overflow: hidden; */
							padding: 40px;
							background: #fff;
							color: #2a284f;
							margin: 50px 0;
							position: relative;
						}
						.technologies-blocks-blue:after {
							position: absolute;
							content: "";
							width: 100%;
							height: 15px;
							background: #2a284f;
							left: 0;
							right: 0;
							margin: 0 auto;
							top: -25px;
						}
						.technologies-blocks-blue-rocket {
							background: url(startup.svg) center center / contain no-repeat;
							padding: 50px;
						}
						.jcc {
							justify-content: center;
						}
						.aic {
							align-items: center;
						}
						.technologies-blocks-blue-text {
							padding: 0 30px;
							position: relative;
						}
						.technologies-blocks-blue-text-first {
							font-size: 30px;
							font-weight: 400;
						}
						.technologies-blocks-blue-text-course {
							font-size: 35px;
							font-weight: 800;
						}
						.technologies-blocks-blue-button {
							/* border: 2px solid #fdc931; */
							position: absolute;
							background: #2a284f;
							cursor: pointer;
							color: white;
							font-size: 12px;
							padding: 7px 27px;
							font-weight: 500;
							margin: 5px 10px;
							/* outline: 2px solid #fdc931; */
							outline-offset: -2px;
							display: inline;
							transition: .3s;
						}
						.technologies-blocks-blue-button::before {
							content:"";
							position: absolute;
							left: 0;
							margin: 0 auto;
							bottom: -8px;
							width: 0%;
							height: 3px;					
							background: #fdc931;
							transition: .3s;

						}
						.technologies-blocks-blue-button:hover::before {
							width: 100%;
						}
						.technologies-blocks-blue-button:hover {
							background: #fdc931;
							color: #2a284f;
						}
						.tac {
							text-align: center;
						}
						.technologies-blocks-blue-skill-logo {
							padding: 25px;
						}
						.technologies-blocks-blue-skill-html {
							background: url(html-5.svg) center center / contain no-repeat;
						}
						.technologies-blocks-blue-skill-css {
							background: url(css-3.svg) center center / contain no-repeat;
						}
						.technologies-blocks-blue-skill-js {
							background: url(Javascript.svg) center center / contain no-repeat;
						}
						.technologies-blocks-blue-skill-ajax {
							background: url(AJAX.svg) center center / contain no-repeat;
						}
						.technologies-blocks-blue-skill {
							display: flex;
							justify-content: center;
							align-items: center;
							padding: 20px 0;
						}
						.technologies-blocks-blue-skill-title {
							padding: 0 15px;
						}
						.technologies-blocks-blue-skill-orange {
							color: #fdc931;
							font-size: 12px;
						}
						.big-question-text .one {
							position: relative;
						}
						.big-question-text .one, .big-question-text .two, .big-question-text .three {
							display: inline-block;
						}
						.big-question-text .one::before {
							content: "?";
							position: absolute;
							font-size: 30rem;
							/* line-height: 33rem; */
							user-select: none;
							top: -100px;
    					right: -200px;
							font-family: "Roboto Condensed";
							font-weight: 600;
							color: #fdc931
						}

			

		</style>
        <section id="technologies" >
            <div class="technologies-full-info">
                <div class="flex wrap">
									<div class="big-question">
										<div class="big-question-text">
											<span class="one">Для</span><br> <span class="two">Кого</span><br> <span class="three">Курс</span>
											<!-- <div class="big-question-block">?</div> -->
										</div> 
									</div>
									<div class="technologies-blocks">
										<div class="technologies-blocks-attention">
											<span>Внимание</span> <br><span>Курс по React</span><span class="technologies-blocks-attention-red">не подходит</span></span>для новичков в web-разработке</span>
										</div>
										<div class="technologies-blocks-blue" style="right: -150px;">
											<div class="flex jcc aic">
													<div class="technologies-blocks-blue-rocket"></div>
													<div class="technologies-blocks-blue-text">
														<span class="technologies-blocks-blue-text-first">Требуется подготовка по курсу:</span><br>
														<span class="technologies-blocks-blue-text-course">WEB-разработка</span>
														<div class="technologies-blocks-blue-button">перейти на курс</div>
													</div>
		
											</div>
										</div>
										<div class="technologies-blocks-blue" style="right: -300px; padding: 20px;">
											<div class="tac" style="font-size: 20px; font-weight: 400;">Необходимы знания по технологиям:</div>
											<div class="technologies-blocks-blue-skills flex">
												<div class="technologies-blocks-blue-skill technologies-blocks-blue-skill">
													<div class="technologies-blocks-blue-skill-logo technologies-blocks-blue-skill-html"></div>
													<div class="technologies-blocks-blue-skill-title">
															<span class="">HTML</span><br>
															<span class="technologies-blocks-blue-skill-orange">верстка страниц</span>
													</div>
												</div>
												<div class="technologies-blocks-blue-skill technologies-blocks-blue-skill">
													<div class="technologies-blocks-blue-skill-logo technologies-blocks-blue-skill-css"></div>
													<div class="technologies-blocks-blue-skill-title">
															<span class="">CSS</span><br>
															<span class="technologies-blocks-blue-skill-orange">оформление страниц</span>
													</div>
												</div>
												<div class="technologies-blocks-blue-skill technologies-blocks-blue-skill">
													<div class="technologies-blocks-blue-skill-logo technologies-blocks-blue-skill-js"></div>
													<div class="technologies-blocks-blue-skill-title">
															<span class="">Javascript</span><br>
															<span class="technologies-blocks-blue-skill-orange">vanilla.js</span>
													</div>
												</div>
												<div class="technologies-blocks-blue-skill technologies-blocks-blue-skill">
													<div class="technologies-blocks-blue-skill-logo technologies-blocks-blue-skill-ajax"></div>
													<div class="technologies-blocks-blue-skill-title">
															<span class="">AJAX</span><br>
															<span class="technologies-blocks-blue-skill-orange">асинхронные запросы</span>
													</div>
												</div>
											</div>
										</div>
									</div>
                </div>
            </div>
        </section>
