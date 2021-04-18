  </div>

  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

  <!-- DataTables JavaScript -->
  <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true,
        "ordering": false
      });
    });

    $(function() {
      $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd',
        yearRange: "-50:+0", // last hundred years
      });
    });
    $(function() {
      $("#join_date").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
      });
    });

    function load_more(course_code) {
      $('#course_name').attr("readonly", true);
      $.ajax({
        url: "<?php echo base_url('student/ajax_load') ?>",
        type: "POST",
        data: 'course_code=' + course_code,
        dataType: "JSON",
        success: function(html) {
          $('#course_fee').val(html.course_fee);
          $('#course_duration').val(html.course_duration);
          $('#tax').val(html.tax);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }

    function getCourses(id) {
      $('#sem_yearly').html("");
      $('#fee').val("");
      $.ajax({
        url: "<?php echo base_url('unistudents/getCourses/') ?>" + id,
        type: "POST",
        data: 'id=' + id,
        dataType: "JSON",
        success: function(res) {
          $('#course_id').html(res.html);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }

    function getDuration(id) {
      $('#fee').val("");
      $.ajax({
        url: "<?php echo base_url('unistudents/getDuration/') ?>" + id,
        type: "POST",
        data: 'id=' + id,
        dataType: "JSON",
        success: function(res) {
          $('#sem_yearly').html(res.html);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }

    function getFee(id) {
      course_id = $('#course_id').val()
      $.ajax({
        url: "<?php echo base_url('unistudents/getUniFee/') ?>" +course_id+'/'+id,
        type: "POST",
        data: 'id=' + id,
        dataType: "JSON",
        success: function(res) {
          $('#fee').val(res.fee);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }

    function all_expense() {
      var all_qty = $('#qnty').val();
      var all_amt = $('#amount').val();
      if (all_qty == '') {
        all_qty = 1;
      }
      if (all_amt == '') {
        all_amt = 1;
      }
      var all_total = (all_qty * all_amt);
      $('#total_expense').val(all_total);
    }

    $(function() {
      $("#course_suggest").autocomplete({
        maxShowItems: 5,
        source: '<?php echo base_url('course/suggest_courses'); ?>'
      });
    });


    function checkUniFee(id) {
      $('#sem_yearly').html("");
      $('#fee').val("");
      $.ajax({
        url: "<?php echo base_url('unistudents/uniStudentFeeCheck') ?>",
        type: "POST",
        data: 'id=' + id,
        // dataType: "JSON",
        success: function(res) {
          alert(res);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }
  </script>

  </body>

  </html>

