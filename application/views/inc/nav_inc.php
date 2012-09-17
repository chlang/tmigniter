<div class = "cr-navigation">
    <div  style='margin-left:200px; padding-top: 25px; float:left;'>
        <h3><?=$title?></h3>
    </div>
	
     <?php
     
        //if(!isset($state)){ $state = "";}
        if($state=='list' || empty ($state)){
            echo "<div style='margin-left:200px; padding-top: 25px; float:right;'>";
                echo "<a href='".base_url()."index.php/".$this->uri->segment(1)."' title='Back home'>Home</a>";
                echo "<a class='cr-nav-edit' style='cursor:pointer;'>Edit</a>";
                echo "<a class='cr-nav-delete' style='cursor:pointer;'>Delete</a>";
                echo "<a href='".$this->uri->segment(2)."/new'>New</a>";
            echo "</div>";
        }
     
        if($state=='edit' || $state=='new' || $state== 'save'){
            echo "<div style='margin-left:200px; padding-top: 25px; float:right;'>";
                echo "<a href='".base_url()."index.php/".$this->uri->segment(1)."/".$this->uri->segment(2)."'>Cancel</a>";
                echo "<a class='cr-nav-apply' style='cursor:pointer;'>Apply |</a>";
                echo "<a class='cr-nav-save' style='cursor:pointer;'>Save</a>";
            echo '</div>';
        }
    ?>         	
</div>

