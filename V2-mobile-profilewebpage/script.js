function showContent(divIndex) {
  // Hide all content divs
  var contentDivs = document.getElementsByClassName('setting-content');
  for (var i = 0; i < contentDivs.length; i++) {
    contentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var contentId = 'content' + divIndex;
  var specificContent = document.getElementById(contentId);
  specificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var gameContainers = document.getElementsByClassName('content-btn');
  for (var i = 0; i < gameContainers.length; i++) {
      gameContainers[i].classList.remove("content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedGameContainer = event.target;
  clickedGameContainer.classList.add("content-btn-bgcolor");
}



function showProfileContent(divIndex) {
  // Hide all content divs
  var profileContentDivs = document.getElementsByClassName('profile-contents');
  for (var i = 0; i < profileContentDivs.length; i++) {
    profileContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var profileContentId = 'profileContent' + divIndex;
  var profileSpecificContent = document.getElementById(profileContentId);
  profileSpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var profileContainers = document.getElementsByClassName('profile-content-btn');
  for (var i = 0; i < profileContainers.length; i++) {
      profileContainers[i].classList.remove("profile-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedProfileContainer = event.target;
  clickedProfileContainer.classList.add("profile-content-btn-bgcolor");
}

function showCashierContent(divIndex) {
  // Hide all content divs
  var cashierContentDivs = document.getElementsByClassName('cashier-contents');
  for (var i = 0; i < cashierContentDivs.length; i++) {
    cashierContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var cashierContentId = 'cashierContent' + divIndex;
  var cashierSpecificContent = document.getElementById(cashierContentId);
  cashierSpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var cashierContainers = document.getElementsByClassName('cashier-content-btn');
  for (var i = 0; i < cashierContainers.length; i++) {
      cashierContainers[i].classList.remove("cashier-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedcashierContainer = event.target;
  clickedcashierContainer.classList.add("cashier-content-btn-bgcolor");
}

function showBankTransferContent(divIndex) {
  // Hide all content divs
  var bankTransferContentDivs = document.getElementsByClassName('bankTransfer-container');
  for (var i = 0; i < bankTransferContentDivs.length; i++) {
    bankTransferContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var bankTransferContentId = 'bankTransferContent' + divIndex;
  var bankTransferSpecificContent = document.getElementById(bankTransferContentId);
  bankTransferSpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var bankTransferContainers = document.getElementsByClassName('bankTransfer-content-btn');
  for (var i = 0; i < bankTransferContainers.length; i++) {
      bankTransferContainers[i].classList.remove("bankTransfer-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedbankTransferContainer = event.target;
  clickedbankTransferContainer.classList.add("bankTransfer-content-btn-bgcolor");
}

function uploadFiles() {
  var files = document.getElementById('file_upload').files;
  if(files.length==0){
      alert("Please first choose or drop any file(s)...");
      return;
  }
  var filenames="";
  for(var i=0;i<files.length;i++){
      filenames+=files[i].name+"\n";
  }
  alert("Selected file(s) :\n____________________\n"+filenames);
}

function showwithdrawalbanktransferContent(divIndex) {
  // Hide all content divs
  var withdrawalbanktransferContentDivs = document.getElementsByClassName('withdrawalbanktransfer-container');
  for (var i = 0; i < withdrawalbanktransferContentDivs.length; i++) {
    withdrawalbanktransferContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var withdrawalbanktransferContentId = 'withdrawalbanktransferContent' + divIndex;
  var withdrawalbanktransferSpecificContent = document.getElementById(withdrawalbanktransferContentId);
  withdrawalbanktransferSpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var withdrawalbanktransferContainers = document.getElementsByClassName('withdrawalbanktransfer-content-btn');
  for (var i = 0; i < withdrawalbanktransferContainers.length; i++) {
      withdrawalbanktransferContainers[i].classList.remove("withdrawalbanktransfer-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedwithdrawalbanktransferContainer = event.target;
  clickedwithdrawalbanktransferContainer.classList.add("withdrawalbanktransfer-content-btn-bgcolor");
}

function showcreateAccountContent(divIndex) {
  // Hide all content divs
  var createAccountContentDivs = document.getElementsByClassName('createAccount-container');
  for (var i = 0; i < createAccountContentDivs.length; i++) {
    createAccountContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var createAccountContentId = 'createAccountContent' + divIndex;
  var createAccountSpecificContent = document.getElementById(createAccountContentId);
  createAccountSpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var createAccountContainers = document.getElementsByClassName('createAccount-content-btn');
  for (var i = 0; i < createAccountContainers.length; i++) {
      createAccountContainers[i].classList.remove("createAccount-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedcreateAccountContainer = event.target;
  clickedcreateAccountContainer.classList.add("createAccount-content-btn-bgcolor");
}

function showHistoryContent(divIndex) {
  // Hide all content divs
  var historyContentDivs = document.getElementsByClassName('history-contents');
  for (var i = 0; i < historyContentDivs.length; i++) {
    historyContentDivs[i].style.display = 'none';
  }

  // Show the specific content div
  var historyContentId = 'historyContent' + divIndex;
  var historySpecificContent = document.getElementById(historyContentId);
  historySpecificContent.style.display = 'block';

  // Remove 'active' class from all game containers
  var historyContainers = document.getElementsByClassName('history-content-btn');
  for (var i = 0; i < historyContainers.length; i++) {
      historyContainers[i].classList.remove("history-content-btn-bgcolor");
  }
  
  // Add 'active' class to the clicked game container
  var clickedHistoryContainer = event.target;
  clickedHistoryContainer.classList.add("history-content-btn-bgcolor");
}