<div class="center menu">
    <?php
    $links=[
        'Blog'=>'/',
        'Projetos'=>'/projetos',
        'Facebook'=>'https://facebook.com/aicouto',
        'Github'=>'https://github.com/aicouto',
        'Twitter'=>'https://twitter.com/aicouto',
        'Contato'=>'https://goo.gl/forms/mvOUqlValMF0Xzxw1'
    ];
    $total=count($links);
    $i=1;
    foreach ($links as $key => $value) {
        $start=substr($value,0,4);
        if($start=='http'){
            $target=' target="_blank"';
        }else{
            $target='';
        }
        print '<a href="'.$value.'"'.$target.'>'.$key.'</a>';
        if($i++<>$total){
            print ' - ';
        }

    }
    ?>
</div>
