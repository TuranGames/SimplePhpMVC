

  <!-- Left Menu -->
  <div class="light-menu">
    <h1 id="page_title">Docs</h1>
    <a class="active" href="#">All</a>
    <a href="#">Edit</a>
    <a href="#">Add</a>
    <a href="#">Drafts</a>
  </div>  
  <!-- END Left Menu -->
  
  <!-- Top Menu -->
  <div class="top-menu">
    <nav class="left">
      <!-- <a class="active-tab" href="#">HTML</a> -->
       <!-- <a href="#" class="selected">CSS</a> -->
      <?php $i=0; foreach  ($lessonInfo as $lessonInfo) { 
        $i++;
$name = $lessonInfo['name'];
        ?>  


 <a onclick="changePage('articles.php','<?=$name;?>', 'cl<?=$i;?>');" id="cl<?=$i;?>"><?=$lessonInfo['name'];?></a>
  <?php }  ?>
  <a onclick="getPage('users.php')" ><i class="fa fa-plus-circle"   aria-hidden="true"></i></a>
    </nav>
  </div>

  <div id="content">
    <div id="table-content">
       <?php if($Count > 0 ) { ?>
      <table cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <td><input type="checkbox"></td>
            <td>Name</td>
            <td>Description</td>
            <td>Date Created</td>
            <td></td>
          </tr>  
        </thead>
        <tbody>
                <?php foreach  ($getArticles as $getArticles) { ?>  
          <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
            <tr>
            <td><input type="checkbox"></td>
            <td class="name-td"><?=$getArticles['authorid'];?></td>
            <td class="desc-td"><?=$getArticles['title'];?></td>
            <td class="date-td">6 minutes ago <i class="fa fa-clock-o" aria-hidden="true"></i></td>
            <td></td>
          </tr>
          
<?php } }else{ ?>
<div>No articles yet!!!!</div>
<?php } ?>
        </tbody>
      </table>
      <div id="header-content"><a onclick="" ><i class="fa fa-plus-circle"   aria-hidden="true"></i></a></div>
    </div>

  </div>