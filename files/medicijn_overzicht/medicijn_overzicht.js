document.addEventListener("DOMContentLoaded", function() {
    const page1Btn = document.getElementById("page1-btn");
    const page2Btn = document.getElementById("page2-btn");
    const page3Btn = document.getElementById("page3-btn");
    const page4Btn = document.getElementById("page4-btn");

    // Function to navigate to Page 1
    function goToPage1() {
        window.location.href = "A.html";
    }

    // Function to navigate to Page 2
    function goToPage2() {
        window.location.href = "B.html";
    }

    // Function to navigate to Page 3
    function goToPage3() {
        window.location.href = "C.html";
    }

       // Function to navigate to Page 4
       function goToPage4() {
        window.location.href = "D.html";
    }

    // Event listeners for button clicks
    page1Btn.addEventListener("click", goToPage1);
    page2Btn.addEventListener("click", goToPage2);
    page3Btn.addEventListener("click", goToPage3);
    page4Btn.addEventListener("click", goToPage4);
});
