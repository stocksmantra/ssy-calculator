document.getElementById("ssy-form").addEventListener("submit", function (event) {
    event.preventDefault();
  
    const age = parseInt(document.getElementById("age").value);
    const yearlyDeposit = parseFloat(document.getElementById("yearly-deposit").value);
    const interestRate = parseFloat(document.getElementById("interest-rate").value);
  
    const maturityAmount = calculateMaturityAmount(age, yearlyDeposit, interestRate);
  
    displayResults(maturityAmount);
  });
  
  function calculateMaturityAmount(age, yearlyDeposit, interestRate) {
    const depositYears = 15;
    const maturityYears = 21;
  
    let totalAmount = 0;
    for (let i = 0; i < depositYears; i++) {
      totalAmount += yearlyDeposit;
      totalAmount *= (1 + (interestRate / 100));
    }
  
    return totalAmount;
  }
  
  function displayResults(maturityAmount) {
    const resultsDiv = document.getElementById("results");
    resultsDiv.innerHTML = `<h3>Maturity Amount: ₹${maturityAmount.toFixed(2)}</h3>`;
  }