<style>
    .cartt {
    background: #e5e5e5;
    border-radius: 5px;
    padding: 15px;
    }
</style>

<div style='
display:flex;
gap: 10px;
flex-wrap: wrap;
'>
    <?php use yii\bootstrap5\Html;
    use yii\bootstrap5\LinkPager;
    use yii\widgets\ActiveForm;

    foreach ($them as $cat):?>
    <div class="card">
      <div class="card-body">
          <a class="info" href="<?php echo \yii\helpers\Url::to(['site/work', 'id'=>$cat['id']])?>">
          <?php echo $cat['name']?>
          </a>
      </div>
    </div>

    <?php endforeach;?>
</div>

<h3>Категория работ: <?php echo (!is_null($category)) ? $category->name : 'выберите категорию' ?></h3>

<div style = 'display:flex;
gap: 10px;
flex-wrap: wrap;
margin-top: 15px;'>
    <?php
    foreach ($tours as $tourq):
        ?>
        <div class="cartt">
            <h4 class="bb"><?php echo $tourq['name']?></h4>
            <p class="text"><?php echo yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($tourq['body']), 10) ?></p>
            <div class="dapri">
                <a href="../web/uploads/<?php echo $tourq['file'] ?>">скачать</a>
        </div>
    </div>
    <?php endforeach?>

</div>

<div class="qwerty">
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);?>
</div>

<div>
    <a href="zayavka">Хотите разместить здесь свою работу?</a>
</div>


<style>

    .info{
        text-decoration: none !important;
    }

    .qwerty{
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin-top: 47px !important;
    }
    .bb{

        margin-top: 11px !important;

    }

    .carrt{

        display: flex !important;
    }

    .card{

        display: flex !important;
        width: 150px !important;
    }


</style>



