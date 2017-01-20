<?
session_start();
include("./include_head.php");
?>
	<div id="main_container">
		<div class="choicearea">
			<div class="inner">
				<dl class="cho1">
					<dt>언제</dt>
					<dd>
						<div class="datebox">
							<input type="text" id="testDatepicker" class="txt" value="2016-11-24" />
						</div>
						<div class="selbox">
							<select class="select_st1 w80">
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option>24:00</option>
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w80">
								<option>00:00</option>
								<option>01:00</option>
								<option>02:00</option>
								<option>03:00</option>
								<option>04:00</option>
								<option>05:00</option>
								<option>06:00</option>
								<option>07:00</option>
								<option>08:00</option>
								<option>09:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
								<option>20:00</option>
								<option>21:00</option>
								<option>22:00</option>
								<option>23:00</option>
								<option>24:00</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="cho2">
					<dt>난이도</dt>
					<dd>
						<div class="selbox">
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							&nbsp;~&nbsp;
							<select class="select_st1 w50">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="ml20">
								<select class="select_st1 w100">
									<option>공포포함</option>
									<option>공포만</option>
									<option>공포X</option>
								</select>
							</div>
							<div class="chkbox">
								<label class="ichk"><span>했던테마 제외</span><input type="checkbox"><i><em></em></i></label>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="cho3">
					<dt>지역</dt>
					<dd>
						<ul class="loca_1dep">
							<li><a href="search.html">전체</a></li>
							<li>
								<a href="#">서울</a>
								<ul class="loca_2dep">
									<li><a href="search.html">전체</a></li>
									<li><a href="search.html">강남</a></li>
									<li><a href="search.html">홍대</a></li>
									<li><a href="search.html">종로.대학로</a></li>
									<li class="ml0"><a href="search.html">건대.잠실</a></li>
									<li><a href="search.html">영등포.신림</a></li>
								</ul>
							</li>
							<li><a href="search.html">경기</a></li>
							<li><a href="search.html">인천</a></li>
							<li><a href="search.html">대전</a></li>
							<li><a href="search.html">부산</a></li>
						</ul>
					</dd>
				</dl>
				<div class="schbox">
					<input type="text" class="txt" placeholder="카페, 지역, 테마 직접검색 가능합니다." />
					<a href="search.html" class="btn_sch">검색</a>
				</div>
			</div>
		</div>
		<div class="timenow">
			<div class="inner">
				<div class="tit"><strong>TIME NOW</strong><em>선착순, 지금바로 시작하는 게임!  30~80% 핫딜까지!</em></div>
				<!-- s : timenow pc -->
				<div class="slidearea">
					<ul class="bxslider01">
						<li>
							<ul>
								<li>
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li>
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow3.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>전역하는날</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow4.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>살인자의방</strong><em>강남</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 <br/>
											통해 용의자에 대한 정보를 입수한 <br/>
											당신은 용의자의 집에 잠입하여 <br/>
											단서를 찾기로 한다. <br/>
											용의자가 집에 돌아오기까지<br/> 
											남은 시간은 1시간. <br/>
											<br/>
											당신은 서서히 방문을 <br/>
											들어서게 되는데...<br/>
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- e : timenow pc -->
				<!-- s : timenow mobile -->
				<div class="slidearea_m">
					<ul class="bxslider01_m">
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow5.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>데드넘버</strong><em>건대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
						<li>
							<ul>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow1.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>더라스트갬블2</strong><em>신림</em></div>
								</li>
								<li onclick="">
									<div class="timebox">
									<img src="../images/contents/img_timenow2.jpg" alt="" />
										<div class="o_box" onclick="location.href='theme_view.php'">
											<div class="con">
											기자 생활 중 알게 된 형사 M씨를 
											통해 용의자에 대한 정보를 입수한 
											당신은 용의자의 집에 잠입하여 
											단서를 찾기로 한다. 
											용의자가 집에 돌아오기까지
											남은 시간은 1시간. 
											
											당신은 서서히 방문을 
											들어서게 되는데...
											</div>
											<div class="revbox">
												<strong>바로<br/>예약</strong>
												<div>
													<em>2:30</em> <em>4-6인</em>
													<span>13000<em>원</em></span>
												</div>
											</div>
										</div>
									</div>
									<div class="infobox"><strong>찜질방알바</strong><em>홍대</em></div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- e : timenow mobile -->
			</div>
		</div>
		<div class="container_inner pd44">
			<div class="newarea">
				<div class="new_f_l">
					<div class="maintit">추천 NEW<em>따끈따끈 새로나온 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				<div class="new_f_r">
					<div class="maintit">추천 BEST<em>요즘 가장 인기있는 테마!</em></div>
					<div class="slidearea">
						<ul class="bxslider02">
							<li>
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new2.jpg" alt="" /></dt>
									<dd>
										<strong>장기밀매</strong>
										<ul><li class="icon_new1">난이도: 2</li><li class="icon_new2">공포감</li></ul>
										<div>
											당신은 장기밀매단에 납치되어 
											한 시간 후에는 장기적출 수술을 받고 
											죽는 운명에 처해있다. 
											이 밀실을 탈출하라.
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><img src="../images/contents/img_new1.jpg" alt="" /></dt>
									<dd>
										<strong>올드보이</strong>
										<ul><li class="icon_new1">난이도: 2</li></ul>
										<div>
											15년의 감금, 60분의 추적!
											사설 감금방에서 탈출하고 
											임무를 수행하라!
										</div>
										<a href="theme_view.php">자세히보기</a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="cafearea">
				<div class="maintit">추천카페<em>광고</em></div>
				<ul>
					<li><a href="#"><img src="../images/contents/img_cafe1.jpg" alt="카페1" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe2.jpg" alt="카페2" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe3.jpg" alt="카페3" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe4.jpg" alt="카페4" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe5.jpg" alt="카페5" /></a></li>
					<li><a href="#"><img src="../images/contents/img_cafe6.jpg" alt="카페6" /></a></li>
				</ul>
			</div>
		</div>
	</div>
<?
include("./include_footer.php");
?>
</div><!-- end : id : wrap -->
<script type="text/javascript" src="../js/common.js"></script>
</body>
</html>
