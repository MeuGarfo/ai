<div class="center">
    <b>
        <?php
        $links=[
            'Principal'=>'/',
            'Projetos'=>'/projetos',
            'Facebook'=>'http://fb.com/aicouto',
            'Github'=>'http://github.com/aicouto',
            'Twitter'=>'http://twitter.com/aicouto',
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
                print ' | ';
            }

        }
        ?>
    </b>
</div>
