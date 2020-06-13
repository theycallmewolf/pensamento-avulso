<main>
  <section id="list">
    <div id="head">
      <h1>Artistas</h1>
      <a href="admin/artista" class="btn-two">Adicionar</a>
    </div>
    <div class="row table-head">
      <span class="title">nome</span>
      <span class="artist"></span>
      <span class="date-start">adicionado</span>
      <span class="status">status</span>
      <span class="date-end"></span>
      <span class="actions"></span>
    </div>
    <?php foreach($artists AS $artist):?>
      <div class="row">
        <span class="title"><b><?=$artist['name'];?></b></span>
        <span class="artist"></span>
        <span class="date-start"><?=date('j M Y', strtotime($artist['date_added']));?></span>
        <span class="status">
          <?php if($artist['publish'] == 1):?>
            <span class="publish yes"></span>
          <?php else:?>
            <span class="publish no"></span>
          <?php endif;?>
        </span>
        <span class="date-end"></span>
        <span class="actions">
          <a href="admin/artista/<?=$artist['id'];?>">editar</a>
          <a href="admin/artists/delete/<?=$artist['id'];?>">eliminar</a>
        </span>
      </div>
    <?php endforeach;?>
  </section>
  <?php if(!empty($this->session->flashdata('msg'))):?>
    <div class="feedback"><?=$this->session->flashdata('msg');?></div>
  <?php endif;?>
</main>