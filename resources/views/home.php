<?php
/** @var TYPE_NAME $title */
$this->layout('masterTemplate', ['title' => $title]);
?>


<?php $this->start('style') ?>
<style>
  body{
     background-color: black;
  }
  ul{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
  }
  ul li {
      list-style: none;
      color: white;

  }
  ul li:hover {
      color: gray;
     cursor: pointer;
  }
.div_teste{
    width: 100%;
    display: flex;
    align-content: center;
    justify-content: center;
    /*border: 2px solid red;*/
}

</style>
<?php $this->stop() ?>


<div class="div_teste">
<h2 style="color: aliceblue">teste aqui</h2>
</div>


<?php $this->start('script') ?>

    <script>
        console.log("teu certo")
    </script>

<?php $this->stop() ?>