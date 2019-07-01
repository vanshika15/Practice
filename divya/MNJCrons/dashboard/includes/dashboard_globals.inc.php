<?php
/*********************dashboard_globals.inc.php************************

     Created By         : Rahul Batra
     Last Modified By   : Rahul Batra, 2008-06-01
     Description        : Globals for Dashboard
**********************************************************************/

global $LOCAL_PATH, $BENCHMARK_PATH;
$LOCAL_PATH = "/usr/local/apache/htdocs/";
$BENCHMARK_PATH = "$LOCAL_PATH/benchmark";

include_once($LOCAL_PATH . "/smarty/libs/Smarty.class.php");
$smarty = new Smarty;

$dashboard_tpl = $LOCAL_PATH . "/smarty/templates/dashboard";
$mailerTplPath = $LOCAL_PATH . "smarty/templates/mailers/";

$dash_url = "http://" . $_SERVER["HTTP_HOST"] . "/dashboard/";
$smarty->assign("dash_url", $dash_url);

$slowEmails = "('123@gmail.com', '123@yahoo.com', 'a@a.com', 'a@b.com', 'a@gmail.com', 'a@yahoo.com', 'aa@yahoo.com', 'aaa@gmail.com', 'aaa@yahoo.com', 'abc@abc.com', 'abc@gmail.com', 'abc@hotmail.com', 'abc@rediffmail.com', 'abc@xyz.com', 'ABC@yahoo.co.in', 'abc@yahoo.com', 'abcd@gmail.com', 'abcd@yahoo.com', 'dean.rbs@raiuniversity.edu', 'hr.uttaranchal@gmail.com', 'kumar@gmail.com', 'mails4usernames@gmail.com', 'qualitykiosk2006@gmail.com', 'raj@yahoo.com', 'ram@gmail.com ', 's@gmail.com', 's@yahoo.com   ', 'test@test.com', 'xxx@gmail.com', 'xxx@yahoo.com', 'xxxx@gmail.com', 'xxxxx@gmail.com', 'xyz@gmail.com', 'xyz@rediffmail.com', 'xyz@xyz.com', 'xyz@yahoo.co.in', 'xyz@yahoo.com', 'junk.resume@gmail.com', 'mail4u@gmail.com','abc@yahoo.co.in', 'k@gmail.com', 'sss@gmail.com', 'ss@gmail.com', 'aa@yahoo.com', 'r@gmail.com', 'aa@gmail.com', 'ss@yahoo.com', 'm@gmail.com', 'asdf@gmail.com', 'raj@gmail.com', 'p@gmail.com', 'kumar@yahoo.com')";

$arrConnections = array(
                    "DEV"  => array(
                        "URL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php",
                        "APP_DIR" => "/usr/local/src/apache/htdocs/crons/critical_actions",
                        "MAIL_TRACK_URL"=> "http://dev1.infoedge.com:8000/manager/emt.php?mid=",
            		"RESETPASSURL"=> "http://dev1.infoedge.com:8000/nLogin/resetpass.php",
			"LOGINURL"=> "http://dev1.infoedge.com:8000/nLogin",
			"CJAURL" => "http://dev4.infoedge.com/mynaukri/js_msngr.php?xz=0_0_81&ma=C",
			"COMPBLOCKURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/BlockCompany/view/",
			"PROFILEVISIBILITYURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/ManageProfiles/profileVisibility",
			"MOBILEURL" => "http://www.naukri.com/mobile/",
			"PROFILEURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/Profile/view",
			"TCURL" => "http://dev4.infoedge.com/mynaukri/mn_termsconditions.php",
			"FAQURL" => "http://my.naukri.com/faq/faq.php",
			"IMGURL" => "http://dev4.infoedge.com:8000/gaurav1/dashboard/mailer_revamp/i",
			"DELETEACCURL" => "http://dev2.infoedge.com:9000/mynaukri/resume.php/DeleteAccount/delete",
                       "ICOPSSAVEURL" => "http://dev2.infoedge.com:9000/amit/mnj/icops/web/resume.php/AL/saveDetails",
                       "ICOPSEDITURL" => "http://dev2.infoedge.com:9000/amit/mnj/icops/web/resume.php/AL/editProfile",
                        "FFITCERTURL" => "http://dev2.infoedge.com:9000/fastforward/web/frontend.php/it-certifications?fftid=110039",
                        "FFAPTICERTURL" => "http://dev2.infoedge.com:9000/fastforward/web/frontend.php/aptitude-test-online?fftid=110040",
                        "FFVERIURL" => "http://dev2.infoedge.com:9000/fastforward/web/frontend.php/background-checks?fftid=210044"),

                    "TEST" => array(
                        "URL" => "http://testsrv5.infoedge.com/mynaukri/resume.php",
                        "APP_DIR" => "/usr/local/apache3/htdocs/crons/critical_action",
                        "MAIL_TRACK_URL"=> "http://test.my.infoedge.com/manager/emt.php?mid=",
                        "RESETPASSURL"=> "http://test.login.infoedge.com/nLogin/resetpass.php",
			"LOGINURL"=> "http://test.login.infoedge.com/nLogin",
			"CJAURL" => "http://tjobsrch2.infoedge.com/mynaukri/js_msngr.php",
			"COMPBLOCKURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/BlockCompany/view/",
			"PROFILEVISIBILITYURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/ManageProfiles/profileVisibility",
			"MOBILEURL" => "http://www.naukri.com/mobile/",
			"PROFILEURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/Profile/view",
			"TCURL" => "http://tjobsrch2.infoedge.com/mynaukri/mn_termsconditions.php",
			"FAQURL" => "http://test.my.infoedge.com/faq/faq.php",
			"IMGURL" => "http://testsrv5.infoedge.com/s/1/10/i",
			"DELETEACCURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/DeleteAccount/delete",
                       "ICOPSSAVEURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/AL/saveDetails",
                       "ICOPSEDITURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/AL/editProfile"),

		    "LIVE" => array(
				    "URL" => "https://my.naukri.com",
				    "APP_DIR" => "/home/vikasa/cron/critical_action",
				    "MAIL_TRACK_URL"=> "https://my.naukri.com/manager/emt.php?mid=",
				    "RESETPASSURL"=> "https://login.naukri.com/nLogin/resetpass.php",
				    "LOGINURL"=> "https://login.naukri.com/nLogin",
				    "CJAURL" => "http://jobsearch.naukri.com/mynaukri/js_msngr.php",			
				    "COMPBLOCKURL" => "https://my.naukri.com/BlockCompany/view/",
				    "PROFILEVISIBILITYURL" => "https://my.naukri.com/ManageProfiles/profileVisibility",
				    "MOBILEURL" => "https://www.naukri.com/mobile/",
				    "PROFILEURL" => "https://my.naukri.com/Profile/view",
				    "TCURL" => "http://jobsearch.naukri.com/mynaukri/mn_termsconditions.php",
				    "FAQURL" => "https://my.naukri.com/faq/faq.php",
				    "IMGURL" => "https://img.naukimg.com/s/1/10/i",
				    "DELETEACCURL" => "https://my.naukri.com/DeleteAccount/delete",
				    "ICOPSSAVEURL" => "https://my.naukri.com/AL/saveDetails",
				    "ICOPSEDITURL" => "https://my.naukri.com/AL/editProfile",
				    "FFITCERTURL" => "https://resume.naukri.com/it-certifications?fftid=110039",
				    "FFAPTICERTURL" => "https://resume.naukri.com/aptitude-test-online?fftid=110040",
				    "FFVERIURL" => "https://resume.naukri.com/background-checks?fftid=210044",
				    "RESUMENONREG_SERVICEURL" => "http://service.response.resdex.com/brv/index.php/rservice"

		    ),
                    "LIVE1" => array(
                                    "URL" => "https://my.naukri.com",
                                    "APP_DIR" => "/home/vikasa/cron/critical_action",
                                    "MAIL_TRACK_URL"=> "https://my.naukri.com/manager/emt.php?mid=",
                                    "RESETPASSURL"=> "https://login.naukri.com/nLogin/resetpass.php",
                                    "LOGINURL"=> "https://login.naukri.com/nLogin",
                                    "CJAURL" => "https://jobsearch.naukri.com/mynaukri/js_msngr.php",
                                    "COMPBLOCKURL" => "https://my.naukri.com/BlockCompany/view/",
                                    "PROFILEVISIBILITYURL" => "https://my.naukri.com/ManageProfiles/profileVisibility",
                                    "MOBILEURL" => "https://www.naukri.com/mobile/",
                                    "PROFILEURL" => "https://my.naukri.com/Profile/view",
                                    "TCURL" => "https://jobsearch.naukri.com/mynaukri/mn_termsconditions.php",
                                    "FAQURL" => "https://my.naukri.com/faq/faq.php",
                                    "IMGURL" => "https://img.naukimg.com/s/1/10/i",
                                    "DELETEACCURL" => "https://my.naukri.com/DeleteAccount/delete",
                                    "ICOPSSAVEURL" => "https://my.naukri.com/AL/saveDetails",
                                    "ICOPSEDITURL" => "https://my.naukri.com/AL/editProfile",
                                    "FFITCERTURL" => "https://resume.naukri.com/it-certifications?fftid=110039",
                                    "FFAPTICERTURL" => "https://resume.naukri.com/aptitude-test-online?fftid=110040",
                                    "FFVERIURL" => "https://resume.naukri.com/background-checks?fftid=210044",
                                    "RESUMENONREG_SERVICEURL" => "http://service.response.resdex.com/brv/index.php/rservice"

                    ),
                    
                    "STAGING" => array(
                                    "URL" => "https://my.naukri.com",
                                    "APP_DIR" => "/home/vikasa/cron/critical_action",
                                    "MAIL_TRACK_URL"=> "https://my.naukri.com/manager/emt.php?mid=",
                                    "RESETPASSURL"=> "https://login.naukri.com/nLogin/resetpass.php",
                                    "LOGINURL"=> "https://login.naukri.com/nLogin",
                                    "CJAURL" => "https://jobsearch.naukri.com/mynaukri/js_msngr.php",
                                    "COMPBLOCKURL" => "https://my.naukri.com/BlockCompany/view/",
                                    "PROFILEVISIBILITYURL" => "https://my.naukri.com/ManageProfiles/profileVisibility",
                                    "MOBILEURL" => "https://www.naukri.com/mobile/",
                                    "PROFILEURL" => "https://my.naukri.com/Profile/view",
                                    "TCURL" => "https://jobsearch.naukri.com/mynaukri/mn_termsconditions.php",
                                    "FAQURL" => "https://my.naukri.com/faq/faq.php",
                                    "IMGURL" => "http://img.naukimg.com/s/1/10/i",
                                    "DELETEACCURL" => "https://my.naukri.com/DeleteAccount/delete",
                                    "ICOPSSAVEURL" => "https://my.naukri.com/AL/saveDetails",
                                    "ICOPSEDITURL" => "https://my.naukri.com/AL/editProfile",
                                    "FFITCERTURL" => "https://resume.naukri.com/it-certifications?fftid=110039",
                                    "FFAPTICERTURL" => "https://resume.naukri.com/aptitude-test-online?fftid=110040",
                                    "FFVERIURL" => "https://resume.naukri.com/background-checks?fftid=210044",
                                    "RESUMENONREG_SERVICEURL" => "http://service.response.resdex.com/brv/index.php/rservice"
                                     )

		    );

$_ID_IT_FAREA = array(
    3, /* Web / Graphic Design / Visualiser */
    24, /* IT-Software                                        */
    37, /* IT- Hardware / Telecom / Technical Staff / Support */
    41, /* Other                                             */
    61, /* IT Software- Application Programming / Maintenance */
    62, /* IT Software - Client Server                        */
    63, /* IT Software- DBA / Datawarehousing                 */
    64, /* IT Software- ERP / CRM                             */
    65, /* IT Software- Embedded /EDA /VLSI /ASIC /Chip Des.  */
    66, /* IT Software- Network Administration / Security     */
    67, /* IT Software- QA & Testing                          */
    68, /* IT Software - System Programming                   */
    69, /* IT Software - Telecom Software                     */
    70, /* IT Software- Systems / EDP / MIS                   */
    71, /* IT Software- E-Commerce / Internet Technologies    */
    72, /* IT Software - Mainframe                            */
    73, /* IT Software - Mobile                               */
    74, /* IT Software - Middleware                           */
    75  /* IT Software - Other                                */
    );

/*$arrConnections = array(
                    "DEV"  => array(
                        "URL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php",
                        "APP_DIR" => "/usr/local/src/apache/htdocs/crons/critical_actions",
                        "MAIL_TRACK_URL"=> "http://dev1.infoedge.com:8000/manager/emt.php?mid=",
            		"RESETPASSURL"=> "http://dev1.infoedge.com:8000/nLogin/resetpass.php",
			"CJAURL" => "dev4.infoedge.com/mynaukri/js_msngr.php?xz=0_0_81&ma=C",
			"COMPBLOCKURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/BlockCompany/view/",
			"PROFILEVISIBILITYURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/ManageProfiles/profileVisibility",
			"MOBILEURL" => "http://www.naukri.com/mobile/",
			"PROFILEURL" => "http://dev2.infoedge.com:9000/mynaukri/web/resume.php/Profile/view",
			"TCURL" => "http://dev4.infoedge.com/mynaukri/mn_termsconditions.php",
			"FAQURL" => "http://my.naukri.com/faq/faq.php"),

                    "TEST" => array(
                        "URL" => "http://testsrv5.infoedge.com/mynaukri/resume.php",
                        "APP_DIR" => "/usr/local/apache3/htdocs/crons/critical_action",
                        "MAIL_TRACK_URL"=> "http://test.my.infoedge.com/manager/emt.php?mid=",
                        "RESETPASSURL"=> "http://test.login.infoedge.com/nLogin/resetpass.php",
			"CJAURL" => "tjobsrch2.infoedge.com/mynaukri/js_msngr.php?xz=0_0_81&ma=C",
			"COMPBLOCKURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/BlockCompany/view/",
			"PROFILEVISIBILITYURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/ManageProfiles/profileVisibility",
			"MOBILEURL" => "http://www.naukri.com/mobile/",
			"PROFILEURL" => "http://testsrv5.infoedge.com/mynaukri/resume.php/Profile/view",
			"TCURL" => "http://tjobsrch2.infoedge.com/mynaukri/mn_termsconditions.php",
			"FAQURL" => "http://test.my.infoedge.com/faq/faq.php"),

                    "LIVE" => array(
                        "URL" => "http://my.naukri.com",
                        "APP_DIR" => "/home/vikasa/cron/critical_action",
		        "MAIL_TRACK_URL"=> "http://my.naukri.com/manager/emt.php?mid=",
                        "RESETPASSURL"=> "https://login.naukri.com/nLogin/resetpass.php",
			"CJAURL" => "jobsearch.naukri.com/mynaukri/js_msngr.php?xz=0_0_81&ma=C",			
			"COMPBLOCKURL" => "http://my.naukri.com/BlockCompany/view/",
			"PROFILEVISIBILITYURL" => "http://my.naukri.com/ManageProfiles/profileVisibility",
			"MOBILEURL" => "http://www.naukri.com/mobile/",
			"PROFILEURL" => "http://my.naukri.com/Profile/view",
			"TCURL" => "http://jobsearch.naukri.com/mynaukri/mn_termsconditions.php",
			"FAQURL" => "http://my.naukri.com/faq/faq.php")
                    );*/
