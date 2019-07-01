<?php

define('__DIR__', pathinfo(__FILE__, PATHINFO_DIRNAME));

if (isset($_SERVER['argv'][1]))
  $aArg = $_SERVER['argv'][1];

	switch($aArg)
	{
		case "FFPromotion":
			include_once(__DIR__."/ffPromotionMailer.class.php");
			$objMailer =new FFPromotionMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "UploadPhoto":
			include_once(__DIR__."/uploadPhotoMailer.class.php");
			$objMailer =new UploadPhotoMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "Update":
			include_once(__DIR__."/updateMailer.class.php");
			$objMailer =new UpdateMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "PremiumCAM":
			include_once(__DIR__."/premiumCamMailer.class.php");
			$objMailer =new PremiumCAMMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "ApplyConfirmation":
			include_once(__DIR__."/applyConfirmationMailer.class.php");
			$objMailer =new ApplyConfirmationMailer($SERVER_APPLYMASTER);
			$objMailer->init();
			break;
		case "RegistrationPromotion":
			include_once(__DIR__."/registrationPromotionMailer.class.php");
			$objMailer =new RegistrationPromotionMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
                case "AmbitionBox": 
                        $startHour = $_SERVER['argv'][2];
                        $endHour = $_SERVER['argv'][3];
                        $processNum = $_SERVER['argv'][4];
                        include_once(__DIR__."/AmbitionBoxMailer.class.php");
                        $objMailer =new AmbitionBoxMailer($SERVER_RESUMESLAVE, $startHour, $endHour, $processNum);
                        $objMailer->init();
                        break;
		case "AmbitionBoxNew": 
                        $startHour = $_SERVER['argv'][2];
                        $endHour = $_SERVER['argv'][3];
                        $processNum = $_SERVER['argv'][4];
                        include_once(__DIR__."/AmbitionBoxMailerNew.php");
                        $objMailer =new AmbitionBoxMailerNew($SERVER_RESUMESLAVE, $startHour, $endHour, $processNum);
                        $objMailer->init();
                        break;

                case "AmbitionBoxSendMail":
                        include_once(__DIR__."/AmbitionBoxMailer.class.php");
                        $startHour = $_SERVER['argv'][2];
                        $endHour = $_SERVER['argv'][3];
                        $processNum = $_SERVER['argv'][4];
                        $objMailer =new AmbitionBoxMailer($SERVER_RESUMESLAVE, $startHour, $endHour, $processNum);
                        $objMailer->sendMail();
                        break;
/*                case "AmbitionBox":
                        $startHour = $_SERVER['argv'][2];
                        $endHour = $_SERVER['argv'][3];
                        $processNum = $_SERVER['argv'][4];
                        include_once(__DIR__."/AmbitionBoxMailer.class.php");
                        $objMailer =new AmbitionBoxMailer($SERVER_RESUMESLAVE, $startHour, $endHour, $processNum);
                        $objMailer->init();
                        break;*/
                case "RecruiterView":
//file_put_contents('/tmp/r.log',"ssssssssssssssssssssssssss"."\n",FILE_APPEND);

			$minId = $_SERVER['argv'][2];
			$maxId = $_SERVER['argv'][3];
			$processNum = $_SERVER['argv'][4];
try {
//file_put_contents('/tmp/r.log',$minId.$maxId.$processNum.print_r($objMailer,1)."\n",FILE_APPEND);
			include_once(__DIR__."/recruiterViewMailer.class.php");
			$objMailer =new RecruiterViewMailer($SERVER_CVCRMMASTER, $minId, $maxId, $processNum);

}  catch (Exception $e)  {

file_put_contents('/tmp/r.log',print_r($e,1)."\n",FILE_APPEND);
}
			$objMailer->init();

                        break;
                case "RecruiterViewCleanUp":
                        include_once(__DIR__."/recruiterViewMailerCleanUp.class.php");
                        $objMailer =new RecruiterViewMailerCleanUp($SERVER_CVCRMMASTER,$_SERVER['argv'][2]);
                        $objMailer->init();
                        break;
                case "RecruiterViewCleanUpWeekend":
                        include_once(__DIR__."/recruiterViewMailerCleanUpWeekend.class.php");
                        $objMailer =new RecruiterViewMailerCleanUpWeekend($SERVER_CVCRMMASTER,$_SERVER['argv'][2]);
                        $objMailer->init();
                        break;
                case "ZeroRecruiterView":
                        include_once(__DIR__."/zeroRecruiterViewMailer.class.php");
                        $objMailer =new ZeroRecruiterViewMailer($SERVER_CVCRMMASTER,$_SERVER['argv'][2]);
                        $objMailer->init();
                        break;
                case "ZeroRecruiterViewCleanUp":
                        include_once(__DIR__."/zeroRecruiterViewMailerCleanUp.class.php");
                        $objMailer =new ZeroRecruiterViewMailerCleanUp($SERVER_CVCRMMASTER,$_SERVER['argv'][2]);
                        $objMailer->init();
                        break;
		case "MissingOut":
			include_once(__DIR__."/missingOutMailer.class.php");
			$objMailer =new MissingOutMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "PremiumEmailVerify":
			include_once(__DIR__."/premiumEmailVerifyMailer.class.php");
			$objMailer =new PremiumEmailVerifyMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
		case "PremiumWelcome":
			include_once(__DIR__."/premiumWelcomeMailer.class.php");
			$objMailer =new PremiumWelcomeMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
               case "Icops":
                       include_once(__DIR__."/icopsMailer.class.php");
                       $objMailer =new IcopsMailer($SERVER_NEWRESUMESLAVE);
                       $objMailer->init();
                       break;
        case "NPCam":
            include_once(__DIR__."/camNP.class.php");
            //$objMailer =new NonPremiumCam($SERVER_RESUMESLAVE);
            $objMailer =new NonPremiumCam($SERVER_276RESUMESLAVE);
            $objMailer->init();
            break;
        case "MPCam":
            include_once(__DIR__."/camMP.class.php");
//echo "1";
            $objMailer =new ModPremiumCam($SERVER_RESUMESLAVE);
//echo "2";
            $objMailer->init();
            break;
        case "RPCam":
            include_once(__DIR__."/camRP.class.php");
            $objMailer =new ResmanPremiumCam($SERVER_RESUMESLAVE);
            $objMailer->init();
            break;

	case "RecruiterViewVisa":
		    $minId = $_SERVER['argv'][2];
		    $maxId = $_SERVER['argv'][3];
		    $processNum = $_SERVER['argv'][4];
		    include_once(__DIR__."/recruiterViewMailerVisa.class.php");
		    $objMailer =new RecruiterViewMailerVisa($SERVER_CVCRMMASTER, $minId, $maxId, $processNum);
		    $objMailer->init();
		    break;

		case "ApplyRecommendationReminderMailer":
			include_once(__DIR__."/applyRecommendationReminderMailer.class.php");
			$objMailer =new ApplyRecommendationReminderMailer($SERVER_RESUMESLAVE);
			$objMailer->init();
			break;
	case "ApplyView":
        	include_once(__DIR__ . "/ApplyViewMailer.class.php");
     //         print_r($_SERVER['argv'][2]);die;
	 //     $objMailer = new ApplyViewMailer($SERVER_RESUMESLAVE,$_SERVER['argv'][2]);
	        $objMailer = new ApplyViewMailer($SERVER_RESUMESLAVE,100);
	        $objMailer->init();
	        break;
       case "ApplyViewCleanUp":
                include_once(__DIR__ . "/ApplyViewCleanUp.class.php");
 	        $objMailer = new ApplyViewCleanUp($SERVER_RESUMESLAVE);
	        $objMailer->init();
	        break;
	default:
			echo "Wrong Argument\nChoose \n1. Mobile \n2. CjaPromotion\n3. Confidential\n4. MultiProfile\n5. ResdexAwareness\n6. VerifyMobile\n7. UploadResume\n8. SurveyMailer\n9. FFPromotion\n10. UploadPhoto\n11. Update\n12. PremiumCAM\n13. ApplyConfirmation\n14. RegistrationPromotion\n15. RecruiterView <batch size to process recrds(optional ,default set to 10000)>\n16. MissingOut\n17. PremiumEmailVerify\n18. PremiumWelcome\n40. ZeroRecruiterView <batch size to process recrds(optional ,default set to 10000)>\n20. ApplyRecommendationReminderMailer\n21. ApplyView\n22. ApplyViewCleanUp";
			exit(0);
	}
?>
