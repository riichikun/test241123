document.addEventListener("DOMContentLoaded", (event) => {

    

    changeText()

	/* add extra text for wide windows */
    function changeText() {
        if (window.innerWidth > 767) {
		    document.querySelector('.text__block>p').textContent = 'Когда ваше время и энергия лучше сфокусированы, стремление к новым возможностям становится реальностью,  ваш успех зависит от ваших действий'
            document.querySelector('#Button_1>.button__inner').textContent = 'Записаться на консультацию'
            document.querySelector('#Button_2>.button__inner').textContent = 'Бесплатная консультация'
            document.querySelector('#Stat_1>div>p:last-of-type').textContent = 'техник для достижения цели'
            document.querySelector('#Stat_2>div>p:last-of-type').textContent = 'увеличение личной продуктивности'
        }
        else {
            document.querySelector('.text__block>p').textContent = "Ваш успех зависит от ваших действий"
            document.querySelector('#Button_1>.button__inner').textContent = 'Записаться'
            document.querySelector('#Button_2>.button__inner').textContent = 'Заказать звонок'
            document.querySelector('#Stat_1>div>p:last-of-type').textContent = 'техник'
            document.querySelector('#Stat_2>div>p:last-of-type').textContent = 'продуктивности'

        }

    }
	/* toggle window with the forms */
	function toggleWindow() {
		if(!document.querySelector('.sent-window').classList.contains('hidden')) document.querySelector('.sent-window').classList.add('hidden')
		/* blur everything else */
		document.querySelector('.bg-layer').classList.toggle('hidden');
		let blurred = document.querySelectorAll('.blur-toggled');
		for(let i=0; i<blurred.length; i++) {
			if(blurred[i].style.filter != 'blur(7.5px)') blurred[i].style.filter = 'blur(7.5px)'
			else blurred[i].style.filter = 'blur(0px)'
		}
		//document.querySelector('.contact-window').classList.toggle('hidden')
		if(window.innerWidth > 639) {
			if(document.querySelector('.contact-window').style.transform != 'translateX(1612px)') document.querySelector('.contact-window').style.transform = 'translateX(1612px)'	
			else document.querySelector('.contact-window').style.transform = 'translateX(0px)'
		}
		else {
			if(document.querySelector('.contact-window').style.transform != 'translateX(200%)') document.querySelector('.contact-window').style.transform = 'translateX(200%)'	
			else document.querySelector('.contact-window').style.transform = 'translateX(0%)'
		}

	}

	function onResizeWindow() {
		if(window.innerWidth < 640) {
			if(document.querySelector('.contact-window').style.transform == 'translateX(1612px)') document.querySelector('.contact-window').style.transform = 'translateX(200%)'	
		}
		else {
			if(document.querySelector('.contact-window').style.transform == 'translateX(200%)') document.querySelector('.contact-window').style.transform = 'translateX(1612px)'	
		}
	}
	function sendMail(event) {
		event.preventDefault();
		let name = document.querySelector('input[name="name"]').value;
		let tel = document.querySelector('input[name="tel"]').value;
		console.log(name)
		fetch('message.php', {
			method: "POST",
			name: name,
			tel: tel
		})
		document.querySelector('.sent-window').classList.toggle('hidden')
	}
	function toggleCheckMark() {
		document.querySelector('.checkmark').classList.toggle('hidden')
	}
	

    window.addEventListener('resize', changeText);

	/* fixing window position if resized */
	window.addEventListener('resize', onResizeWindow);

	/* toggling window */
	document.querySelector('#Button_1').addEventListener('click', toggleWindow);
	document.querySelector('#Button_2').addEventListener('click', toggleWindow);
	let cross = document.querySelectorAll('.cross');
	for(let i=0; i<cross.length; i++) {
		cross[i].addEventListener('click', toggleWindow);
	}
	

	/* submitting form and sending email */
	document.querySelector('form').addEventListener('submit', sendMail);

	/* custom checkmark showm */
	document.querySelector('[name="agreement"]').addEventListener('input', toggleCheckMark);

	document.querySelector("[name='tel']").addEventListener('input', () => {
			if (document.querySelector("[name='tel']").validity.typeMismatch) {
				document.querySelector("[name='tel']").setCustomValidity("I am expecting tel!");
			}
	})

})