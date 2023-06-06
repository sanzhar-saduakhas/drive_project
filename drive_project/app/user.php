<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="facebook-domain-verification" content="1eual2vwilq8mrazezp8n1a6ihj9eh"/>
  <title>Цифровая ипотека</title>
  <!-- CDN -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>


  <link href="./main.css" rel="stylesheet">
  <link href="./loader.css" rel="stylesheet">
  <script src="logic.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
</head>

<body>
<strong class="loading">Загрузка…</strong>
<div id="app">
  <main class="">

    <div class="notification"></div>
    <aside class="">
      <ul class="step ">
		<ul class="step" style="padding-bottom: 500px; padding-top: 150px;">
			<li class="step__item">
				<div class="step__item-here  active">Вы здесь</div>
				<div class="step__item-number ">1</div>
				<div>
					<div class="step__item-title ">Личные данные</div>
					<div class="step__item-info">
						<p>Для подачи заявки на рассрочку Вам необходимо
							заполнить анкету и подать заявку.</p>
					</div>
				</div>
			</li>
			<li class="step__item  active">
				<div class="step__item-here ">Вы здесь</div>
				<div class="step__item-number active">2</div>
				<div>
					<div class="step__item-title">Проверка заявки</div>
					<div class="step__item-info visited">
						<p>Система проверяет ваши анкетные данные.</p>
					</div>
				</div>
			</li>
			<li class="step__item  ">
				<div class="step__item-here ">Вы здесь</div>
				<div class="step__item-number">3</div>
				<div class="step__item-title ">Решение</div>
				<div class="step__item-info">
					<p>Ознакомьтесь с решением по вашей заявке.</p>
				</div>
			</li>
		</ul>
      <div class="aside__mobile">
        <div class="aside__button"></div>
      </div>
      <div class="side-links"><a class="side-links__link" href="tel:595">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="side-links__icon">
          <path d="M4.892 15.9536C7.25918 18.7833 10.1087 21.0112 13.3611 22.5877C14.5994 23.1745 16.2555 23.8707 18.1005 23.9901C18.2148 23.995 18.3242 24 18.4386 24C19.6769 24 20.6715 23.5723 21.4821 22.6921C21.4871 22.6871 21.4971 22.6772 21.502 22.6672C21.7905 22.3191 22.1187 22.0058 22.4618 21.6726C22.6956 21.4488 22.9343 21.2151 23.163 20.9764C24.2223 19.8724 24.2223 18.47 23.1531 17.4007L20.1643 14.4119C19.657 13.8848 19.0503 13.6063 18.4138 13.6063C17.7772 13.6063 17.1655 13.8848 16.6434 14.407L14.863 16.1873C14.6989 16.0928 14.5298 16.0083 14.3707 15.9287C14.1717 15.8293 13.9877 15.7348 13.8236 15.6303C12.2024 14.6009 10.7304 13.2582 9.323 11.5325C8.61185 10.6324 8.13444 9.8765 7.80124 9.10568C8.26871 8.68297 8.70634 8.24037 9.12905 7.80771C9.27824 7.65354 9.43241 7.49938 9.58657 7.34521C10.1237 6.80812 10.4121 6.18649 10.4121 5.55491C10.4121 4.92333 10.1286 4.3017 9.58657 3.76461L8.1046 2.28264C7.93054 2.10858 7.76643 1.93949 7.59735 1.76544C7.26913 1.42727 6.92598 1.07915 6.58782 0.765852C6.07559 0.263572 5.47385 0 4.8373 0C4.20572 0 3.599 0.263572 3.06689 0.770825L1.20696 2.63075C0.530624 3.30709 0.147698 4.12764 0.0681294 5.0775C-0.0263588 6.26606 0.192456 7.52922 0.759385 9.05595C1.62967 11.4182 2.94256 13.6113 4.892 15.9536ZM1.28156 5.18193C1.34123 4.52051 1.59486 3.9685 2.07227 3.49109L3.92225 1.64111C4.21069 1.36262 4.52897 1.2184 4.8373 1.2184C5.14065 1.2184 5.44898 1.36262 5.73245 1.65106C6.06564 1.95939 6.37895 2.28264 6.71712 2.62578C6.8862 2.79983 7.06026 2.97389 7.23431 3.15292L8.71629 4.63489C9.02462 4.94322 9.18376 5.25653 9.18376 5.56486C9.18376 5.87319 9.02462 6.18649 8.71629 6.49482C8.56212 6.64898 8.40796 6.80812 8.25379 6.96229C7.7913 7.42976 7.35864 7.87236 6.88123 8.29507C6.87128 8.30501 6.86631 8.30999 6.85636 8.31993C6.4436 8.7327 6.50825 9.12557 6.60771 9.42395C6.61268 9.43887 6.61766 9.44882 6.62263 9.46374C7.00555 10.3838 7.53767 11.259 8.36817 12.3034C9.86009 14.1434 11.4316 15.5707 13.1622 16.6697C13.376 16.809 13.6048 16.9184 13.8187 17.0278C14.0176 17.1272 14.2016 17.2217 14.3657 17.3261C14.3856 17.3361 14.4005 17.346 14.4204 17.356C14.5845 17.4405 14.7436 17.4803 14.9028 17.4803C15.3006 17.4803 15.5592 17.2267 15.6438 17.1421L17.5037 15.2822C17.7921 14.9938 18.1054 14.8396 18.4138 14.8396C18.7917 14.8396 19.1 15.0734 19.294 15.2822L22.2928 18.276C22.8895 18.8728 22.8845 19.5193 22.2778 20.1509C22.069 20.3746 21.8501 20.5885 21.6164 20.8123C21.2683 21.1504 20.9053 21.4986 20.577 21.8914C20.0051 22.5081 19.3238 22.7965 18.4436 22.7965C18.3591 22.7965 18.2695 22.7915 18.185 22.7866C16.5538 22.6821 15.0371 22.0456 13.8982 21.5035C10.805 20.0066 8.08968 17.8831 5.83688 15.1877C3.98193 12.9548 2.73369 10.8761 1.90816 8.64816C1.39594 7.28056 1.20199 6.18152 1.28156 5.18193Z"
                fill="white"></path>
        </svg>
      </a><a class="side-links__link" href="https://wa.me/+77761595595">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="side-links__icon">
          <path d="M12 0C5.38292 0 0 5.38292 0 12C0 14.2574 0.627231 16.4488 1.81708 18.3517C1.34308 20.0123 0.486923 23.1535 0.477692 23.1863C0.433385 23.3488 0.480923 23.5223 0.602308 23.6391C0.723692 23.7558 0.899077 23.7974 1.05877 23.7485L5.81538 22.2854C7.67862 23.4078 9.81231 24 12 24C18.6171 24 24 18.6171 24 12C24 5.38292 18.6171 0 12 0ZM12 23.0769C9.91431 23.0769 7.88262 22.494 6.12415 21.3918C6.04985 21.3452 5.96446 21.3217 5.87908 21.3217C5.83338 21.3217 5.78769 21.3286 5.74338 21.342L1.59 22.6205C1.89508 21.5068 2.44338 19.5148 2.76138 18.4066C2.79831 18.2783 2.77754 18.1398 2.70508 18.0277C1.53923 16.2337 0.923077 14.1494 0.923077 12C0.923077 5.89246 5.89246 0.923077 12 0.923077C18.1075 0.923077 23.0769 5.89246 23.0769 12C23.0769 18.1075 18.1075 23.0769 12 23.0769Z"
                fill="white"></path>
          <path d="M19.8373 14.8273C18.9853 14.3542 18.2598 13.8797 17.7304 13.5336C17.3261 13.2696 17.034 13.079 16.8198 12.9714C16.2212 12.6728 15.7675 12.8837 15.5949 13.0582C15.5732 13.0799 15.5538 13.1034 15.5372 13.1284C14.9155 14.0611 14.1036 14.9533 13.866 15.0013C13.5913 14.9584 12.306 14.2277 11.0284 13.1639C9.72411 12.077 8.90349 11.0362 8.78303 10.3273C9.6198 9.46606 9.92118 8.92421 9.92118 8.30759C9.92118 7.67206 8.43872 5.01867 8.17057 4.75052C7.90149 4.4819 7.29549 4.4399 6.36918 4.62452C6.28011 4.64252 6.19795 4.68636 6.13334 4.75052C6.02118 4.86267 3.39688 7.53821 4.64395 10.781C6.01288 14.3399 9.52657 18.4767 14.0063 19.1487C14.5153 19.2248 14.9926 19.2627 15.4393 19.2627C18.0747 19.2627 19.6301 17.9367 20.0681 15.3064C20.1009 15.1139 20.0081 14.9219 19.8373 14.8273ZM14.1433 18.2357C9.40611 17.5254 6.42226 12.8321 5.50565 10.4496C4.59641 8.08652 6.27318 5.97959 6.69411 5.50329C7.03657 5.44513 7.39703 5.42067 7.54749 5.44421C7.8618 5.88129 8.95011 7.93744 8.99811 8.30759C8.99811 8.5499 8.91918 8.88729 7.97949 9.82744C7.89272 9.91375 7.84426 10.031 7.84426 10.1537C7.84426 12.5704 12.9415 15.923 13.8443 15.923C14.6293 15.923 15.653 14.6034 16.236 13.7436C16.2696 13.745 16.3264 13.7565 16.4072 13.7971C16.5733 13.8807 16.8613 14.0685 17.2255 14.3067C17.7064 14.621 18.3452 15.0382 19.0993 15.4707C18.7569 17.1184 17.7996 18.785 14.1433 18.2357Z"
                fill="white"></path>
        </svg>
      </a></div>
    </aside>
    <section class="content bg-sm-white" id="content">
      <div class="steps__login gg-30 m-t-40 j-c-s-b">
        <div class="steps__login-item"><h1 class="steps__login-title">Заявка на получение</h1>
          <h1 class="steps__login-title green">рассрочки.</h1>
		</div>
		<style>
			.progress-div {
				background: #ffff;
				font-size: 22px;
				line-height: 1.6;
				margin-top: 150px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}

			.progress-text {
				margin-bottom: 15px;
			}

			.progressbar {
				position: relative;
				max-width: 500px;
				width: 100%;
				margin: 20px auto;
				height: 30px;
				overflow: hidden;
				background: #e2e2e2;
				box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
				margin-bottom: 200px;
				border-radius: 20px;
			}

			span.progress {
				position: absolute;
				left: 0;
				top: 0;
				bottom: 0;
				width: 0;
				background: #ff0126;
				border-radius: 20px;
				transition: all .3s;
			}
		</style>
		<script>
			$(document).ready(function () {
				var progress = $('.progressbar .progress')
				function counterInit(fValue, lValue) {
					var counter_value = parseInt($('.counter').text());
					counter_value++;
					if (counter_value === 100) {
						setTimeout(jumpNextPage, 2000);
						function jumpNextPage() {
							document.location = 'congrats.html';
						}
					}
					if (counter_value >= fValue && counter_value <= lValue) {
						$('.counter').text(counter_value + '%');
						progress.css({ 'width': counter_value + '%' });
						setTimeout(function () {
							counterInit(fValue, lValue);
						}, 100);
					}
				}
				counterInit(0, 100);
			});
		</script>
		<div class="progress-div">
			<div class="progress-text">Выполняется обработка данных. Пожалуйста подождите!</div>
			<div class="counter">0</div>
			<div class="progressbar">
				<span class="progress"></span>
			</div>
		</div>
      </div>
    </section>


    <svg style="width: 0px; height: 0px; position: absolute; top: -100%; left: -100%;">
      <text id="__react_svg_text_measurement_id"
            style="user-select: none; filter: drop-shadow(rgba(98, 255, 4, 0.46) 0px 4px 8px);">972
      </text>
    </svg>

    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
      <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
      <div class="g-recaptcha-bubble-arrow"
           style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
      <div class="g-recaptcha-bubble-arrow"
           style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
      <div style="z-index: 2000000000; position: relative;">

      </div>
    </div>

    
	<script src="https://epay.post.kz/ecom/static/a/libs/jquery/jquery/dist/jquery.min.js"></script> 
	<script src="https://epay.post.kz/ecom/static/a/libs/jquery/bootstrap/dist/js/bootstrap.min.js"></script>  
</body>
</html>