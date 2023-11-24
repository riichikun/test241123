<!DOCTYPE html>
<html lang="en" class='h-[100%]'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/extra.css">   
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <title>Test page</title>
</head>
<body class="bg-[url('../src/img/background.png')] relative text-[#fff] font-['Raleway'] pt-[30px] px-[15px] lg:px-[5%] 2xl:px-[15%] h-fit min-h-[100%] w-[100%]" >
    <header class='w-[100%] flex justify-between items-center mb-[76px] blur-toggled'>
        <a href='' class="logo border-t-[1px] border-b-[1px] uppercase font-[600] h-fit text-[18px] md:text-[24px] lg:text-[26px] xl:text-[30px]">
            Alex. Shevtsov
        </a>
        <div class="info__section w-fit md:w-[70%] flex gap-[10px]  md:justify-between">
            <nav class="block flex md:gap-[10px] justify-center items-center w-[40px] md:w-fit h-[40px] rounded-full border-[1px] md:border-none text-[14px]">
                <div class="burger md:hidden">
                    <span></span>
                </div>
                <a class="hidden md:inline whitespace-nowrap" href="">Обо мне</a>
                <a class="hidden md:inline" href="">Наставничество</a>
                <a class="hidden md:inline" href="">Мероприятия</a>
                <a class="hidden md:inline" href="">Кейсы</a>
                <a class="hidden md:inline" href="">Отзывы</a>
                <a class="hidden md:inline" href="">Контакты</a>
            </nav>
            <div class="tel w-[40px] lg:w-fit h-[40px] flex items-center gap-[7%]">
                <div class="icon w-[40px] min-w-[40px] h-[40px] rounded-full border-[1px] bg-[url(../src/img/icon.svg)] bg-no-repeat bg-center"></div>
                <a class='hidden lg:inline whitespace-nowrap font-[600] text-[18px]' href="">8-345-123-34-45</a>
            </div>
        </div>
    </header>


    <main class="w-[100%] sm:p-[30px] blur-toggled">
        <h1 class='w-[84%] mb-[35px] text-[25px] sm:text-[45px] xl:text-[65px] uppercase font-[600]'>Создаю условия для вашего успеха</h1>
        <div class="text__block mb-[50px] flex gap-[6px] md:gap-[24px] items-center">
            <span class="block w-[1px] h-[30px] md:h-[39px] bg-[#fff] opacity-[.5]"></span>
            <p class="w-[48%] opacity-[.5] text-[11px] sm:text-[14px] lg:text-[16px]">Ваш успех зависит от ваших действий</p>
        </div>
        
        <div class="buttons__block xl:flex md:gap-[20px] xl:gap-[40px]">
            <div id='Button_1' class="cursor-pointer relative button w-[126px] sm:w-[370px] xl:w-[380px] h-[30px] sm:h-[71px]  flex mb-[16px] bg-[#fff] text-[10px] sm:text-[18px] font-[600] text-blue z-[3]">
                <div class="button__inner p-[9px] sm:pl-[24px] w-[97px] sm:w-[305px] xl:w-[308px] sm:flex sm:items-center text-center"><span>Записаться</span></div>
                <div class="w-[35px] sm:w-[72px] h-[100%] p-[5px] sm:p-[13px] flex justify-end items-end border-l-blue border-l-2 bg-[#fff]">
                    <img src="./src/img/arrow1.svg" class="w-[8.5px] sm:w-[20px]" alt="">
                </div>
            </div>
            <div id='Button_2' class="cursor-pointer relative button w-[126px] sm:w-[370px] xl:w-[380px] h-[30px] sm:h-[71px]  flex mb-[90px] border-[2px] border-[#fff] text-[10px] sm:text-[18px] font-[600] text-[#fff] z-[3]">
                <div class="button__inner p-[7px] sm:pl-[24px] sm:w-[305px] xl:w-[308px] sm:flex sm:items-center whitespace-nowrap"><span>Заказать звонок</span></div>
                <div class="w-[35px] sm:w-[72px] h-[100%] p-[5px] sm:p-[13px] flex justify-end items-end border-l-[#fff] border-l-2">
                    <img src="./src/img/arrow2.svg" class="w-[8.5px] sm:w-[20px]" alt="">
                </div>
            </div>
        </div>
        <div class="stats flex gap-[51px] lg:gap-[230px] pb-[45px]">
            <div id='Stat_1' class="stat__item flex gap-[8px] lg:gap-[24px] items-center">
                <span class="block w-[1px] h-[30px] sm:h-[80px] lg:h-[133px] bg-[#fff] opacity-[.6] lg:opacity-[0.5]"></span>
                <div class="stats-text">
                    <p class="mb-[2px] sm:mb-[28px] font-['Montserrat'] font-[600] text-[16px] sm:text-[25px] lg:text-[40px]">
                        <?php 
                        $d = date("d");
                        $m = date("m");
                        $y = date("Y");
                        echo intdiv($d, 10)+$d%10+intdiv($m, 10)+$m%10+array_sum(str_split($y)) ?>+
                    </p>
                    <p class="max-w-[155px] text-[10px] sm:text-[14px] lg:text-[16px] opacity-[.5]">техники</p>
                </div>
            </div>
            <div id='Stat_2' class="stat__item flex gap-[8px] lg:gap-[24px] items-center">
                <span class="block w-[1px] h-[30px] sm:h-[80px] lg:h-[133px] bg-[#fff] opacity-[.6] lg:opacity-[0.5]"></span>
                <div class="stats-text">
                    <p class="mb-[2px] sm:mb-[28px] font-['Montserrat'] font-[600] text-[16px] sm:text-[25px] lg:text-[40px]">
                        <?php 
                        $data = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js');
                        $dec = json_decode($data, true);
                        echo round($dec['Valute']['GBP']['Value']);

                        ?>%
                    </p>
                    <p class="max-w-[155px] text-[10px] sm:text-[14px] lg:text-[16px] opacity-[.5]">продуктивности</p>
                </div>
            </div>
        </div>
    </main>


    <div class="sidepic absolute bottom-[0px] right-[0px] z-[-1] max-w-[525px] w-[179px] md:w-[268px] xl:w-[415px] 2xl:w-[525px] max-h-[808px] h-[435px] md:h-[652.5px] 2xl:h-[84.25%] lg:right-[0px] 2xl:right-[5%] overflow-hidden bg-[url(../src/img/mentor.png)] bg-cover bg-position-x-left bg-position-y-bottom blur-toggled "></div>
    </div>



    <div class="contact-window absolute left-[-200%] sm:left-[-1612px] top-[0px] w-[100%] h-[100%] duration-500">
        
        <div class="bg-layer hidden absolute z-[1] w-[0%] h-[100%] bg-[#0F1D4599]">
        </div>

        <div class="contact__container absolute left-[0px] top-[0px] h-[100%] w-[100%] py-[40px] px-[10.6%] sm:px-[40px] sm:w-[612px] z-[2] bg-[#0F1D45] ">
            <div class="cross_container flex justify-end">
                <img src='./src/img/cross.svg' class="cross w-[26px] mb-[52px]">
            </div>
            <h1 class='w-[68%] sm:w-[490px] sm:pl-[50px] mb-[50px] text-[20px] sm:text-[50px] font-[600]'>Закажите обратный звонок</h1>
            <form action="" method='post' class='sm:pl-[35px] sm:pr-[55px]'>
                <input type="text" name='name' placeholder='ИМЯ' class='w-[100%] mb-[44px] m-[5px] pb-[5px] border-b-[1px] border-[#fff] focus-visible:border-none  text-[12px] sm:text-[20px] text-[#fff] font-["Montserrat"] bg-[#ffffff00] focus:bg-[#ffffff00] autofill:bg-[#ffffff00] enabled:bg-[#ffffff00]' required>
                <input type="tel" name='tel' placeholder='ТЕЛЕФОН' class='w-[100%] mb-[30px] sm:mb-[89px] m-[5px] pb-[5px] border-b-[1px] border-[#fff] text-[12px] sm:text-[20px] text-[#fff] font-["Montserrat"] bg-[#ffffff00] focus:bg-[#ffffff00] autofill:bg-[#ffffff00]' required minlength="11">
                <div class="checkbox flex gap-[17px] mb-[44px] sm:mb-[89px]">
                    <div class="checkbox__container relative w-[15px] sm:w-[30px] h-[15px] sm:h-[30px] mt-[0.5%] border-[0.7px] border-[#fff] opacity-[.7]">
                        <input type="checkbox" name="agreement" id="" class='relative w-[100%] h-[100%] opacity-0 z-[5]' required>
                        <img src='./src/img/check.svg' class="checkmark hidden absolute w-[100%] h-[100%] top-[0px] left-[0px]">
                    </div>
                    <label for='agreement' class='w-[83%] opacity-[.7] text-[12px] sm:text-[16px] font-["Montserrat"]'>Согласен на сохранение и обработку персональных данных</label>
                </div>
                <div id='Button_3' class="relative button w-[100%] md:w-[370px] xl:w-[380px] h-[46px] sm:h-[71px] flex justify-center mb-[90px] border-[2px] border-[#fff] text-[10px] sm:text-[18px] font-[600] text-[#fff]">
                    <input type="submit" value="" class='w-[100%] h-[100%] absolute top-[0px] left-[0px]'>
                    <div class="button__inner p-[7px] md:pl-[24px] w-[100%] md:w-[305px] xl:w-[308px] flex items-center justify-center whitespace-nowrap ">Заказать обратный звонок</div>
                    <div class="min-w-[44px] sm:min-w-[68px] h-[100%] p-[5px] sm:p-[13px] flex justify-end items-end border-l-[#fff] border-l-2">
                        <img src="./src/img/arrow2.svg" class="w-[13px] sm:w-[20px]" alt="">
                    </div>
                </div>
            </form>
        </div>

        <div class="sent-window hidden absolute left-[0px] top-[0px] h-[100%] min-h-[668px] w-[100%] py-[40px] px-[10.6%]  sm:px-[40px] sm:w-[612px] z-[3] bg-[url('../src/img/background-popup.png')] font-[600] ">
            <div class="cross_container flex justify-end ">
                <img src='./src/img/cross.svg' class="cross w-[26px] mb-[52px]">
            </div>
            <div class="sent-inner mb-[209px] flex flex-col items-center ">
                <h1 class='w-[227px] mb-[98px] text-[30px] sm:text-[50px] text-center' >Спасибо за заявку</h1>
                <p class='w-[100%] text-[25px] sm:text-[40px] text-center'>Я обязательно свяжусь с вами в ближайшее время.</p>
            </div>
            <div class="logo-srapper mb-[80px] flex justify-end">
                <p class="logo w-fit border-t-[1px] border-b-[1px] uppercase font-[600] h-fit text-[14px] sm:text-[24px] whitespace-nowrap">Alex. Shevtsov</p>
            </div>
        </div>
    </div>


</body>
<script src='./src/index.js'></script>
</html>

