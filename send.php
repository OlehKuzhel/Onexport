<?php
if (!isset($_POST['name']) or empty($_POST['name'])) {
	$error1 = "Имя не указано<br />";
} else $error1 = NULL;


if (empty($error1)) {

	function to_utf8($from_text) {
		return '=?UTF-8?B?'.base64_encode($from_text).'?='; //fix Кракозябрица в имени отправителя письма на почте Yandex
	}
	
	$name  = trim(strip_tags($_POST['name'])); 
	$phone  = trim(strip_tags($_POST['phone']));
	$email  = trim(strip_tags($_POST['email'])); 
	$who  = trim(strip_tags($_POST['who'])); 
	$dil  = trim(strip_tags($_POST['dil'])); 
	$dilyear  = trim(strip_tags($_POST['dilyear'])); 
	$workwith  = trim(strip_tags($_POST['workwith'])); 
	$office  = trim(strip_tags($_POST['office'])); 
	$city  = trim(strip_tags($_POST['city'])); 
	$address  = trim(strip_tags($_POST['address'])); 
	$colpeop  = trim(strip_tags($_POST['colpeop'])); 
	$site  = trim(strip_tags($_POST['site'])); 
	$asite  = trim(strip_tags($_POST['asite'])); 
	$socsite  = trim(strip_tags($_POST['socsite'])); 
	$gorad  = $_POST['gorad']; 
	$key  = $_POST['key']; 
	$vidc  = trim(strip_tags($_POST['vidc']));

	$vido  = trim(strip_tags($_POST['vido'])); 
	$lot  = trim(strip_tags($_POST['lot'])); 
	$lotday  = trim(strip_tags($_POST['lotday']));

	$payd  = trim(strip_tags($_POST['payd'])); 
	$stateo  = $_POST['stateo']; 
	$statecl  = trim(strip_tags($_POST['statecl'])); 
	$stra  = trim(strip_tags($_POST['stra'])); 
	$strah  = $_POST['strah'];

	$howus  = trim(strip_tags($_POST['howus'])); 
	$vozm  = trim(strip_tags($_POST['vozm'])); 
	$cabinet  = trim(strip_tags($_POST['cabinet'])); 
	$compan  = trim(strip_tags($_POST['compan']));
	$pozl  = trim(strip_tags($_POST['pozl'])); 
	
    
	$title = 'Заявка с сайта onexport'; // заголовок письма
	$body = "<table style='width:100%' cellspacing='0' border='1' cellpadding='10'>";
	if(!empty($_POST['name'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Имя:</b></td> <td>{$name}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['phone'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Телефон:</b></td> <td>{$phone}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['email'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>E-mail:</b></td> <td>{$email}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['who'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Кто вы?:</b></td> <td>{$who}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['dil'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Являетесь ли действующим дилером?:</b></td> <td>{$dil}</td>";
		$body .= "</tr>";
		if ($_POST['dil'] == "Да") {
			$body .= "<tr>";
			$body .= "<td width='300'><b>Являюсь дилером (лет):</b></td> <td>{$dilyear}</td>";
			$body .= "</tr>";
			if(!empty($_POST['workwith'])) {
				$body .= "<tr>";
				$body .= "<td width='300'><b>С кем работают:</b></td> <td>{$workwith}</td>";
				$body .= "</tr>";
			}

		}
	} if(!empty($_POST['office'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Дилерский офис:</b></td> <td>{$office}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['city'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Город:</b></td> <td>{$city}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['address'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Адрес:</b></td> <td>{$address}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['colpeop'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Количество человек:</b></td> <td>{$colpeop}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['site'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли веб сайт?:</b></td> <td>{$site}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['asite'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Адрес сайта:</b></td> <td>{$asite}</td>";
		$body .= "</tr>";
	} if(!empty($_POST['socsite'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Вы в социальных сетях:</b></td> <td>{$socsite}</td>";
		$body .= "</tr>";
	}
	if(!empty($_POST['gorad'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Направление дилера:</b></td> <td>";
		foreach($_POST['gorad'] as $value){
            $body .= $value . ', ';
        }
        $body .= "</td></tr>";
    }
	if(!empty($_POST['key'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли ключи от аккаунтов?:</b></td> <td>";
		foreach($_POST['key'] as $value){
            $body .= $value . ', ';
        }
        $body .= "</td></tr>";
    }
    if(!empty($_POST['vidc'])) {
    	$body .= "<tr>";
		$body .= "<td width='300'><b>Какой обьем покупок в квартал?:</b></td> <td>{$vidc}</td>";
		$body .= "</tr>";
	}if(!empty($_POST['vido'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Способы оплаты авто:</b></td> <td>{$vido}</td>";
		$body .= "</tr>";
	}if(!empty($_POST['lot'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Требуется дополнительный срок для оплаты авто:</b></td> <td>{$lot}</td>";
		$body .= "</tr>";
		if ($_POST['lot'] == "Да") {
			$body .= "<tr>";
			$body .= "<td width='300'><b>Сколько дней:</b></td> <td>{$lotday}</td>";
			$body .= "</tr>";
		}
	}if(!empty($_POST['payd'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Оплата за доставку:</b></td> <td>{$payd}</td>";
		$body .= "</tr>";
	}
	if(!empty($_POST['stateo'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>С каких штатов отправляются контейнеры?:</b></td> <td>";
		if(!empty($_POST['statecl'])) {
        	$body .= "{$statecl}, ";
        }
		foreach($_POST['stateo'] as $value){
            $body .= $value . ', ';
        }

        $body .= "</td></tr>";
    }
    if(!empty($_POST['stra'])) {
    	$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли страхование груза в пути?:</b></td> <td>{$stra}</td>";
		$body .= "</tr>";
	}
	if(!empty($_POST['strah'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Фото:</b></td><td>";
		foreach($_POST['strah'] as $value){
            $body .= $value . ', ';
        }
        $body .= "</td></tr>";
    }
    if(!empty($_POST['howus'])) {
    	$body .= "<tr>";
		$body .= "<td width='300'><b>За сколько предоставляют брокерские + экспедиторские (в комплексе) услуги:</b></td> <td>{$howus}</td>";
		$body .= "</tr>";
	}if(!empty($_POST['vozm'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли возможность участия на закрытых аукционах:</b></td> <td>{$vozm}</td>";
		$body .= "</tr>";
	}if(!empty($_POST['compan'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли личный кабинет для контроля процесса приобретенных автомобилейи ведения личной бухгалтерии:</b></td> <td>{$compan} </td>";
		$body .= "</tr>";
	}if(!empty($_POST['cabinet'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Есть ли у транспортной компании услуга финансирования:</b></td> <td>{$cabinet}</td>";
		$body .= "</tr>";
	}if(!empty($_POST['pozl'])) {
		$body .= "<tr>";
		$body .= "<td width='300'><b>Пожелания клиента:</b></td> <td>{$pozl}</td>";
		$body .= "</tr>";
	}
	$body .= "</table>";
	
	$to    = 'Musevich@gmail.com, olehkuzhel@gmail.com, A.chikhradze.1@gmail.com';
	$headers = "MIME-Version: 1.0 \r\n";
	$headers .= "Content-Transfer-Encoding: 8bit \r\n";
	$headers .= "Content-type:text/html;charset=utf-8 \r\n"; //кодировка и тип контента
	$headers .= "From: " . to_utf8('Заявка с сайта onexport') . "<admin@onexport.com> \r\n"; // откуда письмо
	$headers .= "Reply-To: no-replay@onexport.com \r\n"; // отвечать на адрес
	$headers .= 'X-Mailer: PHP/' . phpversion();
	
	// отправка письма
	if (mail($to, $title, $body, $headers)) { 
		echo "Отправлено!";
	} else { 
		echo "Возникла ошибка, попробуйте ещй раз!";
	};
	
} else {
	echo $error1;
}

 ?>
