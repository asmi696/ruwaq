<?php
include 'includes/class/cls.connect-db.php';

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}

if ($id != 0) {
    $feedback = Database::prepare("select f.title, f.comment, f.name, f.mobile, f.organization, c.category, i.interface from feedback f left join categories c on f.category_id = c.id left join interface i on f.interface_id = i.id where f.id = :id");
    $feedback->bindParam(':id', $id, PDO::PARAM_INT);
    $feedback->execute();
    $feedback = $feedback->fetchAll(PDO::FETCH_ASSOC);
    foreach ($feedback as $row) {
        $title = $row["title"];
        $comment = $row["comment"];
        $name = $row["name"];
        $mobile = $row["mobile"];
        $organization = $row["organization"];
        $category = $row["category"];
        $interface = $row["interface"];
    }
    if(preg_match("/\p{Arabic}+/u", $title)){
            $arabic = 1;
        } else{
            $arabic = 0;
        }
        
}
if($arabic == 0){
?>

<div class="modal-header">
    <h5 class="modal-title"><?php echo $title; ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <!--<div class="card card-body bg-light">-->
    <div class="row" style="height: auto">
        <label class="col-sm-4">Comment : </label>
        <p><?php echo $comment; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4">Interface : </label>
        <p><?php echo $interface; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4">Name : </label>
        <p><?php echo $name; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4">Mobile : </label>
        <p><?php echo $mobile; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4">Organization : </label>
        <p><?php echo $organization; ?></p>
    </div>
    </div>
<!--</div>-->
<div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
</div>
<?php
} elseif($arabic == 1) {
    
    $lenght = strlen($comment);
    ?>
<div class="modal-header">
    <button type="button" class="close" style="margin-left:-1em;" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h5 class="modal-title"><?php echo $title; ?></h5>
</div>
<div class="modal-body">
    <div class="row">
        <label class="col-sm-4 text-left <?php if($lenght > '200'){ echo''; } else { echo 'ml-auto';} ?>">Comment : </label>
        <p class="text-right" style="margin-right:1em;"><?php echo $comment; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4 ml-auto text-left">Interface : </label>
        <p class="text-right" style="margin-right:1em;"><?php echo $interface; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4 ml-auto text-left">Name : </label>
        <p class="text-right" style="margin-right:1em;"><?php echo $name; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4 ml-auto text-left">Mobile : </label>
        <p class="text-right" style="margin-right:1em;"><?php echo $mobile; ?></p>
    </div>
    <div class="row">
        <label class="col-sm-4 ml-auto text-left">Organization : </label>
        <p class="text-right" style="margin-right:1em;"><?php echo $organization; ?></p>
    </div>
    </div>
<!--</div>-->
<div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
</div>

<?php
}
