<!-- footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div>Copyright &copy; 2017<script> new Date().getFullYear()>2017&&document.write("-"+new Date().getFullYear()); </script>, Informatika Unjani'13</div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Common JS -->
    <!-- jQuery framework -->
      <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/jquery/jquery-migrate-1.2.1.js') ?>"></script>
    <!-- bootstrap Framework plugins -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- top menu -->
      <script src="<?php echo base_url('assets/js/jquery.fademenu.js') ?>"></script>
    <!-- top mobile menu -->
      <script src="<?php echo base_url('assets/js/selectnav.min.js') ?>"></script>
    <!-- actual width/height of hidden DOM elements -->
      <script src="<?php echo base_url('assets/js/jquery.actual.min.js') ?>"></script>
    <!-- jquery easing animations -->
      <script src="<?php echo base_url('assets/js/jquery.easing.1.3.min.js') ?>"></script>
    <!-- power tooltips -->
      <script src="<?php echo base_url('assets/js/lib/powertip/jquery.powertip-1.1.0.min.js') ?>"></script>
    <!-- date library -->
      <script src="<?php echo base_url('assets/js/moment.min.js') ?>"></script>
    <!-- hapus common functions -->
      <script src="<?php echo base_url('assets/js/beoro_common.js') ?>"></script>
    <!-- combobox -->
      <script src="<?php echo base_url('assets/js/form/fuelux.combobox.min.js') ?>"></script>
    <!-- jQuery UI -->
      <script src="<?php echo base_url('assets/js/lib/jquery-ui/jquery-ui-1.9.2.custom.min.js') ?>"></script>
    <!-- touch event support for jQuery UI -->
      <script src="<?php echo base_url('assets/js/lib/jquery-ui/jquery.ui.touch-punch.min.js') ?>"></script>
      <!-- colorbox -->
            <script src="<?php echo base_url('assets/js/lib/colorbox/jquery.colorbox.min.js') ?>"></script>
    <!-- code prettifier -->
      <script src="<?php echo base_url('assets/js/lib/google-code-prettify/prettify.js') ?>"></script>
      <script type="text/javascript">
        if(typeof prettyPrint == 'function') {
          prettyPrint();
        }
      </script>
    <!-- tree plugin -->
      <script src="<?php echo base_url('assets/js/lib/dynatree/jquery.dynatree.min.js') ?>"></script>
      <script type="text/javascript">
        $("#tree").dynatree({checkbox: true});
      </script>

    <!-- datatables -->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/js/jquery.dataTables.min.js') ?>"></script>-->
    <!-- datatables column reorder -->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/extras/ColReorder/media/js/ColReorder.min.js') ?>"></script>-->
    <!-- datatables column toggle visibility -->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/extras/ColVis/media/js/ColVis.min.js') ?>"></script>-->
    <!-- datatable table tools -->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/extras/TableTools/media/js/TableTools.min.js') ?>"></script>-->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/extras/TableTools/media/js/ZeroClipboard.js') ?>"></script>-->
    <!-- datatables bootstrap integration -->
      <!--<script src="<?//php echo base_url('assets/js/lib/datatables/js/jquery.dataTables.bootstrap.min.js') ?>"></script>-->
      <!--<script src="<?//php echo base_url('assets/js/pages/beoro_datatables.js') ?>"></script>-->
      <script src="<?php echo base_url('assets/datatables/datatables.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/fixedheader/js/dataTables.fixedHeader.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/fixedColumns/js/dataTables.fixedColumns.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/fixedColumns/js/dataTables.fixedColumns.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/responsive/js/dataTables.responsive.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/responsive/js/dataTables.responsive.min.js') ?>"></script>

      <script type="text/javascript">

      $(document).ready(function() {
        var table = $('#form').DataTable( {
            responsive: true
        } );

        new $.fn.dataTable.FixedHeader( table );
    } );
      </script>
      <script type="text/javascript">
      $('#update-form').bootstrapValidator({
  trigger: 'blur',
  fields: {
      first: {
          validators: {
              notEmpty: {
                  message: 'namana nu bener'
              },
              regexp: {
                  regexp: /^[a-zA-Z ]+$/,
                  message: 'Your first name cannot have numbers or symbols'
              }
          }
      },
      last: {
          validators: {
              notEmpty: {
                  message: 'Your last name is required'
              },
              regexp: {
                  regexp: /^[a-zA-Z ]+$/,
                  message: 'Your last name cannot have numbers or symbols'
              }
          }
      },
      email: {
          validators: {
              notEmpty: {
                  message: 'The email is required'
              },
              emailAddress: {
                  message: 'The input is not a valid email address'
              }
          }
      },
      phone: {
          validators: {
              notEmpty: {
                  message: 'The phone number is required'
              },
              regexp: {
                  regexp: /^\+?1?([()/\.\-\s]*[0-9]){10}\s*((ext|x)\s*[0-9]+)*$/,
                  message: 'The input is not a valid US phone number'
              }
          }
      }
  }
})
.on('error.field.bv', '[name="phone"]', function(e, data){
  // change the data-bv-trigger value to keydown
  $(e.target).attr('data-bv-trigger','keydown');
  // destroy the plugin
  // console.info(data.bv.getOptions());
  data.bv.destroy();
  // console.info(data.bv.getOptions());
  // initialize the plugin
  $('#update-form').bootstrapValidator(data.bv.getOptions());
});
      </script>
  </body>
</html>
