<?php require 'lang.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js">
        var dropdowns = document.querySelectorAll(".dropdown");

for (var i = 0; i < dropdowns.length; i++) {
    
    dropdowns[i].addEventListener('click',function(e){

        for (var x = 0; x < dropdowns.length; x++) {
            dropdowns[x].querySelector(".dropdown-content").classList.add("hide");
        }

        e.currentTarget.querySelector(".dropdown-content").classList.toggle("hide");
    });
}
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="profile-webpage.css"/>
    <title></title>
</head>
<body class="bg-color">
    <header>
        <div class="navbar">
            <div class="bg"></div>
            <div class="navbar-container">
            <div class="navbar-logo">
            <img class="logo" src="IMG/demo-logo.png" />
            </div>
            <div class="navbar-right">
            <div class="user-display">
                <div class="user-greeting"><p class = "greeting"><?= __('Welcome')?>,&nbsp;</p><p style="margin-bottom: 0vw; margin-top: 0vw; color: #FFFFFF; font-family: 'Lato', sans-serif;">Testing008</p></div>
                <div class="user-date"><p style="margin-top: 0vw; color: #FFFFFF;font-family: 'Roboto', sans-serif;" id="currentDate"></p>
                <script>
                    const d = new Date().toLocaleString();
                    document.getElementById("currentDate").innerHTML = d;</script>
                </div>
                
            </div>
            <div class="dropdown-menu">
                <button class="dropbtn">
                    <div class="dropdown-content hide">
                        <div><a href="index.php?lang=en">English</a></div>
                        <div><a href="index.php?lang=my">BM</a></div>
                        <div><a href="index.php?lang=zh">中文</a></div>
                    </div>
                </div>   
                <i class="fa-solid fa-ellipsis-vertical "></i>
              </button></div>
            </div>
        </div>
        
    </div>
    </header>
    <div class="button-bar">
        <button class="content-btn content-btn-bgcolor" onclick="showContent(1)" id="profile"><?= __('My Profile')?></button>
        <button class="content-btn" onclick="showContent(2)" id="message"><?= __('Message')?></button>
        <button class="content-btn" onclick="showContent(3)" id="cashier"><?= __('Cashier')?></button>
        <button class="content-btn" onclick="showContent(4)" id="bank"><?= __('Bank')?></button>
        <button class="content-btn" onclick="showContent(5)" id="history"><?= __('History')?></button>
    </div>

    <div class="line"></div>

    <div class="content">
        <!--Profile Content-->
        <div id="content1" class="setting-content" style="display: block;" >
            
            <div class="profile-button-container">
            <div class="profile-button-bar ">
                <button class="profile-content-btn profile-content-btn-bgcolor" style="align-self: start;" onclick="showProfileContent(1)" id="detail"><?= __('My Detail')?></button>
                <button class="profile-content-btn" onclick="showProfileContent(2)" id="referral"><?= __('Referral')?></button>
                <button class="profile-content-btn" onclick="showProfileContent(3)" id="security"><?= __('Security')?></button>
            </div>
            </div>

            <div class="profile-content-container">
                <div id="profileContent1" class="profile-contents" style="display: block;">
                    <div class="details">
                    <div class="details-container box">
                        <div class="details-left">
                            <img class="avatar" src="IMG/avatar.png" />
                            <button class="profile-edit-btn">
                                <img class="edit-btn-image" src="img/edit-btn.png" />   
                                <figcaption style="font-size: 2vw;"><?= __('Edit')?></figcaption>
                              </button>
                        </div>
                        <div class="details-right">
                            <p class="default-font spacing1"><?= __('User')?></p>
                            <p class="default-font spacing1">Uid</p>
                            <img class="profile-badge" src="IMG/profile-badge.png" />
                            <p class="default-font spacing1">0.00 / 500000.00</p>
                            <p class="default-font bold" style=" margin-top:10vw; margin-bottom: 3vw;"><?= __('Personal Details')?></p>
                            <p class="default-font" style="margin-bottom: 3vw;"><?= __('Email Address')?></p>
                            <p class="default-font" style="margin-bottom: 7vw;"><?= __('Mobile Number')?></p>
                        </div>
                    </div>
                    <div class="preferences-container">
                        <p class="preferences-align default-font bold"><?= __('My Preferences')?></p>
                        <p class="preferences-align default-font"><?= __('Currency')?></p>
                    </div>
                </div>
                </div>
                <div id="profileContent2" class="profile-contents">
                    <div class="referral">
                        <div class="referral-container box">
                            <div class="referral-left">
                                <p class="topspace default-font spacing2"><?= __('My ID')?>:</p>
                                <p class="default-font spacing2"><?= __('Referral ID')?>:</p>
                                <p class="topspace default-font spacing2"><?= __('New Member')?>:</p>
                                <p class="default-font spacing2" ><?= __('Straight Line')?>:</p>
                                <p class="topspace default-font spacing2" ><?= __('Today Comm')?>:</p>
                                <p class="default-font spacing2 bottomspace" ><?= __('Claimmable Comm')?>:</p>
                            </div>
                            <div class="referral-right">
                                <p class="default-font spacing2" style="margin-top:24vw;"><?= __('Active Player')?>:</p>
                                <p class="default-font" style="margin-bottom:0vw;"><?= __('Total Player')?>:</p>
                                <button class="topspace claim-commission-btn"><?= __('Claim Commission')?></button>
                            </div>
                        </div>
                        <div class="referral-bottom-container box">
                            <div class="referral-bottom-left">
                                <img class="social-qrcode spacing2" src="IMG/social-qrcode.png">
                                <button class="qrcode-save-btn"> 
                                    <img class="save-image" src="img/save.png"/>
                                    <figcaption><?= __('Save Image')?></figcaption>
                                </button>
                            </div>
                            <div class="referral-bottom-right">
                                <button class="social-media-btn" style="background-color: #3C78EA; gap:3.6vw;">
                                    <img class="facebook-image" src="img/facebook-logo.png"/>
                                    <figcaption><?= __('Share On Facebook')?></figcaption>
                                </button>
                                <button class="social-media-btn" style="background-color: #6EC261;">
                                    <img class="save-image" src="img/whatsapp-logo.png"/>
                                    <figcaption><?= __('Share On Whatsapp')?></figcaption>
                                </button>
                                <button class="social-media-btn" style="background-color: #D25459;">
                                    <img class="save-image" src="img/instagram-logo.png"/>
                                    <figcaption><?= __('Share On Instagram')?></figcaption>
                                </button>
                                <button class="social-media-copy-btn" id="copy-btn">
                                    <p id="copy-text">https://logo.com/registe</p>
                                    <img class="copy-logo" src="img/copy-logo.png"/>
                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profileContent3" class="profile-contents">
                    <div class="box">
                        <p class=" default-font bold" style="display:flex; justify-content: center; padding-top: 3vw;"><?= __('Change Password')?></p>
                        <div class="security-container">
                            <p class=" default-font " style="display:flex; align-items: center; "><?= __('Current Password')?></p>
                            <input class="security-input" type="password" placeholder="Enter Current Password"></input>
                            <p class=" default-font " style="display:flex; align-items: center;"><?= __('New Password')?></p>
                            <input class="security-input" type="password" placeholder="Enter New Password"></input>
                            <p class=" default-font " style="display:flex; align-items: center;"><?= __('Confirm Password')?></p>
                            <input class="security-input" type="password" placeholder="Enter New Password Again"></input>
                        </div>
                    </div>
                    <div class="change-password-btn-container middle-justify">
                        <button class="change-password-btn"><?= __('Change Password')?></button>
                    </div>
                </div>
            </div>

            
        </div>

        <!--Message Content-->
        <div id="content2" class="setting-content">
            <p class="middle-justify default-font" style="color: white;"><?= __('Inbox')?></p>
            <div class="box" style="border-radius: 1vw; border-color:white; min-height: 40vw;">
                <div class="message-container" >
                    <p class="default-font"><?= __('Message')?></p>
                    <img class="refresh-img" style="width:3.447vw; height:3.447vw; "src="img/refresh-img.png" />
                </div>
            </div>
        </div>

        <!--Cashier Content-->
        <div id="content3" class="setting-content">
                <div class="cashier-button-bar">
                    <button class="cashier-content-btn cashier-content-btn-bgcolor"  onclick="showCashierContent(1)"><?= __('Deposit')?></button>
                    <button class="cashier-content-btn"  onclick="showCashierContent(2)" ><?= __('Withdrawal')?></button>              
                </div>
                <div id="cashierContent1" class=" cashier-contents" style="display: block;">
                    <div class="grid-box">
                        <div class="deposit-content ">
                            <div class="default-font middle-justify bold deposit-content-header"><?= __('Please select deposit method')?>:</div>
                            <button class="deposit-btn" onclick="showBankTransferContent(1)">
                                <img class="deposit-btn-logo deposit-btn-logoA" src="img/bank-logo.png"/>
                                <p class="deposit-btn-header"><?= __('Bank Transfer')?></p>
                                <div class="deposit-btn-contentA">
                                    <span class="default-font deposit-font"><?= __('Min')?>&nbsp</span>
                                    <span class="default-font deposit-font bold">MYR10.00</span>
                                </div>
                                <div class="deposit-btn-contentB">
                                    <p class="default-font deposit-font"><?= __('Max')?>&nbsp</p>
                                </div>
                            </button> 
                            <button class="deposit-btn" onclick="showBankTransferContent(2)">
                                <img class="deposit-btn-logo deposit-btn-logoB" src="img/mobile-transfer-logo.png"/>
                                <p class="deposit-btn-header"><?= __('Mobile Transfer')?></p>
                                <div class="deposit-btn-contentA">
                                    <p class="default-font deposit-font"><?= __('Min')?>&nbsp</p>
                                </div>
                                <div class="deposit-btn-contentB">
                                    <p class="default-font deposit-font"><?= __('Max')?>&nbsp</p>
                                </div>
                            </button>
                            <button class="deposit-btn" onclick="showBankTransferContent(3)">
                                <img class="deposit-btn-logo deposit-btn-logoC" src="img/live-agent-logo.png"/>
                            <p class="deposit-btn-header"><?= __('Live Agent')?></p>
                            <div class="deposit-btn-contentA">
                                <p class="default-font deposit-font"><?= __('Min')?>&nbsp</p>
                            </div>
                            <div class="deposit-btn-contentB">
                                <p class="default-font deposit-font"><?= __('Max')?>&nbsp</p>
                            </div>
                        </button>
                    </div>
                    </div>
                    <div id="bankTransferContent1" class="bankTransfer-container">
                        <div class="grid-box bankTransfer-content">
                            <div class="bankTransfer-top">
                                <p class="default-font"><?= __('Option')?>:</p>
                                <p class ="default-font">Bank Transfer</p>
                                <p class="default-font"><?= __('Min/Max Limit')?>:</p>
                                <p class ="default-font">10.00/20,000.00</p>
                                <p class ="default-font span-two-columns"><?= __('Please submit deposit detail after you have successfully made deposit')?>.</p>
                                <p class="default-font middle-align-self"><?= __('Full Name')?>:</p>
                                <input class="bankTransfer-input" type="text" placeholder="Enter Your Full Name"></input>
                                <div></div>
                                <p class="default-font color-lightblue"><?= __('Account name must be same as your bank account holder name')?></p>
                                <p class="default-font middle-align-self"><?= __('Deposit Amount')?>:</p>
                                <input class="bankTransfer-input" type="text" placeholder="Enter Deposit Amount"></input>
                            </div>
                            <div class="bankTransfer-amount">
                                <button class="bankTransfer-amount-btn"><p class="default-font">10</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">50</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">100</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">500</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">1000</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">5000</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">10000</p></button>
                                <button class="bankTransfer-amount-btn"><p class="default-font">50000</p></button>
                            </div>
                            <div class="bankTransfer-choice padding5">
                                <p class="default-font span-six-column"><?= __('Select Bank')?>:</p>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Affin bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Alliance bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Ambank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Bank Islam.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/cimb.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/HSBC.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Maybank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/OCBC.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Public bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/RHB.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/standard.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/UOB.png"/></button>
                            </div>
                        </div>
                        <div class="middle-justify padding3">
                            <button class="middle-justify bank-transfer-nextbtn" onclick="showBankTransferContent(4)"><p class="default-font"><?= __('Next')?></p></button>
                        </div>
                    </div>
                    <div id="bankTransferContent4" class="bankTransfer-container">
                        <div class="grid-box bankTransfer-content padding3 ">
                            <p class="default-font bold bankTransfer-confirmation-top"><?= __('Please make your deposit to the account shown below')?>:</p>
                            <div class="bankTransfer-confirmation-mid">
                                <img class="bankTransfer-confirmation-logo" src="img/Maybank.png"/>
                                <p class="default-font bankTransfer-confirmation-accountname"><?= __('Account Name')?>:</p>
                                <p class="default-font bankTransfer-confirmation-accountnamedisplay"><?= __('H278')?></p>
                                <p class="default-font bankTransfer-confirmation-accountnumber"><?= __('Account Number')?>:</p>
                                <p class="default-font bankTransfer-confirmation-accountnumberdisplay" ><?= __('4837 4889 2771')?></p>
                                <p class="default-font bankTransfer-confirmation-datetime"><?= __('Date/Time')?>:</p>
                                <p class="default-font bankTransfer-confirmation-datetimedisplay"><?= __('09/06/2023 16:39:13')?></p>
                                <p class="default-font bankTransfer-confirmation-fullname"><?= __('Full Name')?>:</p>
                                <p class="default-font bankTransfer-confirmation-fullnamedisplay"><?= __('Desmond Chia')?></p>
                                <p class="default-font bankTransfer-confirmation-depositamount"><?= __('Deposit Amount')?>:</p>
                                <p class="default-font bankTransfer-confirmation-depositnumberdisplay"><?= __('1000')?></p>
                                <p class="default-font bankTransfer-confirmation-uploadproof"><?= __('Upload Proof')?>:</p>
                                <div class="upload-container"><input type="file" id="file_upload" multiple="true"/></div>
                                <p class="default-font bankTransfer-confirmation-promotioncode"><?= __('Promotion Code')?>:</p>
                                <button class="bankTransfer-dropdownbtn" placeholder="Please Choose"></button>
                            </div>
                        </div>
                        <div class="middle-justify padding3">
                            <button class="middle-justify bank-transfer-nextbtn"><p class="default-font"><?= __('Next')?></p></button>
                        </div>
                    </div>
                </div>
                <div id="cashierContent2" class="cashier-contents">
                    <div class="grid-box">
                    <div class="withdrawal-content">
                        <div class="default-font middle-justify bold deposit-content-header"><?= __('Please select deposit method')?>:</div>
                        <button class="deposit-btn" onclick="showwithdrawalbanktransferContent(1)">
                            <img class="deposit-btn-logo deposit-btn-logoA" src="img/bank-logo.png"/>
                            <p class="deposit-btn-header"><?= __('Bank Transfer')?></p>
                            <div class="deposit-btn-contentA">
                                <span class="default-font deposit-font"><?= __('Min')?>&nbsp</span>
                                <span class="default-font deposit-font bold">MYR10.00</span>
                            </div>
                            <div class="deposit-btn-contentB">
                                <p class="default-font deposit-font"><?= __('Max')?>&nbsp</p>
                            </div>
                        </button> 
                    </div>
                    </div>
                    <div id="withdrawalbanktransferContent1" class="withdrawalbanktransfer-container">
                        <div class="grid-box bankTransfer-content padding3">
                            <p class="middle-justify default-font bold">Please update your bank account details</p>
                            <p class="middle-justify default-font bold">A registered bank account is required</p>
                        </div>
                        <div class="middle-justify padding3">
                            <button class="middle-justify withdrawal-bank-transfer-nextbtn" onclick="showwithdrawalbanktransferContent(2)"><p class="default-font"><?= __('Update Bank Detail')?></p></button>
                        </div>
                    </div>
                    <div id="withdrawalbanktransferContent2" class="withdrawalbanktransfer-container">
                        <div class="grid-box bankTransfer-content padding3">
                            <div class="withdrawal-banktransfer-content">
                                <div class="withdrawal-banktransfer-content-top">
                                    <p class="default-font"><?= __('Option')?>:</p>
                                    <p class="default-font"><?= __('Local Bank Transfer')?></p>
                                </div>
                                <div class="withdrawal-banktransfer-content-middle">
                                    <p class="default-font middle-align-self"><?= __('Full Name')?>:</p>
                                    <input class="withdrawal-banktransfer-content-middle-input" type="text" placeholder="Enter Full Name"></input>
                                    <p class="default-font middle-align-self"><?= __('Select Bank Account')?>:</p>
                                    <input class="withdrawal-banktransfer-content-middle-input" type="number" placeholder="Enter Bank Account"></input>
                                    <p class="default-font middle-align-self"><?= __('Withdrawal Amount')?>:</p>
                                    <input class="withdrawal-banktransfer-content-middle-input" type="number" placeholder="Enter Withdrawal Amount"></input>
                                </div>
                            </div>
                        </div>
                        <div class="middle-justify padding3">
                            <button class="middle-justify withdrawal-bank-transfer-nextbtn"><p class="default-font"><?= __('Next')?></p></button>
                        </div>
                    </div>    
                </div>
        </div>

        <!--Bank Content-->
        <div id="content4" class="setting-content">
            <div class="middle-justify "><p class="default-font bold color-lightblue"><?= __('Banking Detail')?></p></div>
            <div class="grid-box padding5 border-radius1 middle-justify"><button class="bigbluebtn" onclick="showcreateAccountContent(1)"><p class="default-font"><?= __('Create Account')?></button></div>
            <div id="createAccountContent1" class="no-display">
                <div class="grid-box border-radius1 padding3 spacing-top2">
                    <div class="newbankaccount-content">
                        <p class="default-font bold"><?= __('Add New Bank Account')?></p>
                        <div class="newbankaccount-content-input">
                            <p class="default-font"><?= __('Account Name')?>:</p>
                            <input class="longgrayinput" type="text" placeholder="Enter Your Account Name"></input>
                            <div></div>
                            <p class="default-font color-lightblue margin-left1"><?= __('Account name must be same as your bank account holder name')?></p>
                        </div>
                        <div class="newbankaccount-content-bankselect">
                            <div class="bankTransfer-choice">
                                <p class="default-font span-six-column"><?= __('Select Bank')?>:</p>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Affin bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Alliance bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Ambank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Bank Islam.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/cimb.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/HSBC.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Maybank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/OCBC.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/Public bank.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/RHB.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/standard.png"/></button>
                                <button class="bankTransfer-choice-btn"><img class="bankTransferLogo" src="img/UOB.png"/></button>
                            </div>
                        </div>
                        <div class="newbankaccount-content-input spacing-top2">
                            <p class="default-font"><?= __('Account Number')?>:</p>
                            <input class="longgrayinput" type="text" placeholder="Enter Your Account Number"></input>
                        </div>
                        <div class="middle-justify padding5 spacing-top2"><button class="bigbluebtn"><p class="default-font"><?= __('Create Account')?></button></div>
                    </div>
                </div>
            </div>
        </div>

        <!--History Content-->
        <div id="content5" class="setting-content">
            <div class="history-button-container">
            <div class="history-button-bar">
                <button class="history-content-btn history-content-btn-bgcolor" style="align-self: start;" onclick="showHistoryContent(1)"><?= __('Deposit')?></button>
                <button class="history-content-btn"  onclick="showHistoryContent(2)"><?= __('Withdrawal')?></button>
                <button class="history-content-btn"  onclick="showHistoryContent(3)"><?= __('Gaming')?></button>
                <button class="history-content-btn"  onclick="showHistoryContent(4)"><?= __('Statement')?></button>
                <button class="history-content-btn"  onclick="showHistoryContent(5)"><?= __('Report')?></button>
            </div>
            </div>
            
            <div>
                <div id="historyContent1" class="history-contents" style="display: block;">
                    <div class="grid-box history-content-grid-template">
                        <p class="default-font fontweight8"><?= __('Date From')?>:</p> 
                        <p class="default-font fontweight8"><?= __('To')?>:</p>
                        <input class="history-content-longgrayinput" type="date" ></input>
                        <input class="history-content-longgrayinput" type="date" ></input>
                        <p class="default-font fontweight8"><?= __('Status')?>:</p>
                        <div></div>
                        <button class="history-content-longgraybtn"><?= __('All Status')?></button>
                        <button class=" history-content-bigbluebtn"><p class="default-font"><?= __('Submit')?></p></button>
                    </div>
                </div>
                <div id="historyContent2" class="history-contents">
                    <div class="grid-box history-content-grid-template">
                    <p class="default-font fontweight8"><?= __('Date From')?>:</p> 
                        <p class="default-font fontweight8"><?= __('To')?>:</p>
                        <input class="history-content-longgrayinput" type="date" ></input>
                        <input class="history-content-longgrayinput" type="date" ></input>
                        <p class="default-font fontweight8"><?= __('Status')?>:</p>
                        <div></div>
                        <button class="history-content-longgraybtn"><?= __('All Status')?></button>
                        <button class=" history-content-bigbluebtn"><p class="default-font"><?= __('Submit')?></p></button>
                    </div>
                </div>
                <div id="historyContent3" class="history-contents">
                    <div class="grid-box history-content-grid-template">
                        <p class="default-font fontweight8"><?= __('Game Type')?>:</p> 
                        <p class="default-font fontweight8"><?= __('Time')?>:</p>
                        <button class="history-content-longgraybtn"><?= __('All')?></button>
                        <button class="history-content-longgraybtn"><?= __('Today')?></button>
                        <p class="default-font fontweight8"><?= __('Game Platform')?>:</p>
                        <div></div>
                        <button class="history-content-longgraybtn"><?= __('All Platform')?></button>
                        <button class=" history-content-bigbluebtn"><p class="default-font"><?= __('Submit')?></p></button>
                    </div>
                </div>
                <div id="historyContent4" class="history-contents">
                    <div class="grid-box history-content-grid-template">
                        <p class="default-font fontweight8"><?= __('Time')?>:</p> 
                        <p class="default-font fontweight8"><?= __('Statement Type')?>:</p>
                        <button class="history-content-longgraybtn"><?= __('Today')?></button>
                        <button class="history-content-longgraybtn"><?= __('All')?></button>
                        <button class="history-content-statement-bigbluebtn span-two-columns spacing-top2"><p class="default-font"><?= __('Submit')?></p></button>
                        
                    </div>
                </div>
                <div id="historyContent5" class="history-contents">
                    <div class="grid-box history-content-grid-template">
                        <p class="default-font fontweight8"><?= __('Game Type')?>:</p> 
                        <p class="default-font fontweight8"><?= __('Time')?>:</p>
                        <button class="history-content-longgraybtn"><?= __('All')?></button>
                        <button class="history-content-longgraybtn"><?= __('All')?></button>
                        <button class="history-content-statement-bigbluebtn span-two-columns spacing-top2"><p class="default-font"><?= __('Submit')?></p></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>