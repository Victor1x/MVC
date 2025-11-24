<?php
    /** @var TYPE_NAME $title */
    $this->layout('masterTemplate', ['title' => $title]);
?>

<?php $this->start('style')?>


<style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border - box;
    font-family: Arial, Helvetica, sans-serif;
}

.container {
    width: 100% ;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f0f2f5;
}

.login-box {
    background: #fff;
    padding: 30px;
    width: 350px;
    border-radius: 12px;
    box-shadow: 05px 15px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.input-group {
    display: flex;
    flex-direction: column;
}

.input-group label {
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.input-group input {
    padding: 10px;
    border: 1px solid#ccc;
    border-radius: 6px;
    outline: none;
    transition: border.2s;
}

.input-group input:focus {
    border-color: #007bff;
}

button {
    padding: 12px;
    border: none;
    background: #007bff;
    color:      #fff;
    cursor: pointer;
    border-radius: 6px;
    font-size: 16px;
    transition: .3s;
}

button:hover {
    background: #0056d2;
}

</style>
<?php $this->stop()?>
 <!-- <?= $this->insert('partials/header')?> -->


<div class="container">
    <form class="login-box">
        <div class="input-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email">
        </div>

        <div class="input-group">
            <label for="Senha">Senha</label>
            <input type="password" id="Senha" name="Senha">
        </div>

        <button type="submit">Entrar</button>
    </form>
</div>


<?php $this->start('script')?>

<script>
    console.log("teu certo")
</script>

<?php $this->stop()?>
