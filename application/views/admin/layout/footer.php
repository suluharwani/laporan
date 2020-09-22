<div class="modal fade" id="modalcalculator" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <!--  <button type="button" class="close"  data-dismiss="modal" aria-hidden="true">×</button> -->
        <h3 class="modal-title" id="myModalLabel">CALCULATOR</h3>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">
        <div class="calculator card">

<input type="text" class="calculator-screen z-depth-1" value="" disabled />

<div class="calculator-keys">

  <button type="button" class="operator btn btn-info" value="+">+</button>
  <button type="button" class="operator btn btn-info" value="-">-</button>
  <button type="button" class="operator btn btn-info" value="*">&times;</button>
  <button type="button" class="operator btn btn-info" value="/">&divide;</button>

  <button type="button" value="7" class="btn btn-light waves-effect">7</button>
  <button type="button" value="8" class="btn btn-light waves-effect">8</button>
  <button type="button" value="9" class="btn btn-light waves-effect">9</button>


  <button type="button" value="4" class="btn btn-light waves-effect">4</button>
  <button type="button" value="5" class="btn btn-light waves-effect">5</button>
  <button type="button" value="6" class="btn btn-light waves-effect">6</button>


  <button type="button" value="1" class="btn btn-light waves-effect">1</button>
  <button type="button" value="2" class="btn btn-light waves-effect">2</button>
  <button type="button" value="3" class="btn btn-light waves-effect">3</button>


  <button type="button" value="0" class="btn btn-light waves-effect">0</button>
  <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
  <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

  <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

</div>
</div>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Logout</a>
  </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<!-- <script src="<?=base_url('assets/sb/')?>vendor/jquery/jquery.min.js"></script> -->
<script src="<?=base_url('assets/sb/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/sb/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/sb/')?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?=base_url('assets/sb/')?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url('assets/sb/')?>js/demo/chart-area-demo.js"></script>
<script src="<?=base_url('assets/sb/')?>js/demo/chart-pie-demo.js"></script>
<script>
document.onkeyup = function(e) {
    if (e.which == 120) {
    $('#modalcalculator').modal('show');
    }else if(e.which == 27){
      $('#modalcalculator').modal('hide'); 
    }
  };
  const calculator = {
    displayValue: '0',
    firstOperand: null,
    waitingForSecondOperand: false,
    operator: null,
  };
  
  function inputDigit(digit) {
    const { displayValue, waitingForSecondOperand } = calculator;
  
    if (waitingForSecondOperand === true) {
      calculator.displayValue = digit;
      calculator.waitingForSecondOperand = false;
    } else {
      calculator.displayValue = displayValue === '0' ? digit : displayValue + digit;
    }
  }
  
  function inputDecimal(dot) {
    // If the `displayValue` does not contain a decimal point
    if (!calculator.displayValue.includes(dot)) {
      // Append the decimal point
      calculator.displayValue += dot;
    }
  }
  
  function handleOperator(nextOperator) {
    const { firstOperand, displayValue, operator } = calculator
    const inputValue = parseFloat(displayValue);
  
    if (operator && calculator.waitingForSecondOperand)  {
      calculator.operator = nextOperator;
      return;
    }
  
    if (firstOperand == null) {
      calculator.firstOperand = inputValue;
    } else if (operator) {
      const currentValue = firstOperand || 0;
      const result = performCalculation[operator](currentValue, inputValue);
  
      calculator.displayValue = String(result);
      calculator.firstOperand = result;
    }
  
    calculator.waitingForSecondOperand = true;
    calculator.operator = nextOperator;
  }
  
  const performCalculation = {
    '/': (firstOperand, secondOperand) => firstOperand / secondOperand,
  
    '*': (firstOperand, secondOperand) => firstOperand * secondOperand,
  
    '+': (firstOperand, secondOperand) => firstOperand + secondOperand,
  
    '-': (firstOperand, secondOperand) => firstOperand - secondOperand,
  
    '=': (firstOperand, secondOperand) => secondOperand
  };
  
  function resetCalculator() {
    calculator.displayValue = '0';
    calculator.firstOperand = null;
    calculator.waitingForSecondOperand = false;
    calculator.operator = null;
  }
  
  function updateDisplay() {
    const display = document.querySelector('.calculator-screen');
    display.value = calculator.displayValue;
  }
  
  updateDisplay();
  
  const keys = document.querySelector('.calculator-keys');
  keys.addEventListener('click', (event) => {
    const { target } = event;
    if (!target.matches('button')) {
      return;
    }
  
    if (target.classList.contains('operator')) {
      handleOperator(target.value);
          updateDisplay();
      return;
    }
  
    if (target.classList.contains('decimal')) {
      inputDecimal(target.value);
          updateDisplay();
      return;
    }
  
    if (target.classList.contains('all-clear')) {
      resetCalculator();
          updateDisplay();
      return;
    }
  
    inputDigit(target.value);
    updateDisplay();
  });

</script>

</body>

</html>
