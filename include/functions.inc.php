<?php
 function show_nav($arr){
     $string = '<ul id="nav" class="nav">
         <li class="current">
             <a class="smoothscroll" href="#home">Home</a>
         </li>';

     foreach($arr as $k => $v){
         $string .='<li>
             <a class="smoothscroll" href="#'.$k.'">'.$v.'</a>
         </li>';
     }
     $string .='</ul>
     <!-- end #nav -->';
     return $string;
 }
 function show_socials($arr, $class){
     $string = '<ul class="'.$class.'">';

     foreach($arr as $k => $v){
         $string .='<li>
            <a href="'.$k.'" target="_blank">
             <i class="fa fa-'.$v.'"></i>
         </a>
         </li>';
     }
     $string .='</ul>';
     return $string;
 }

 function show_ul($arr, $class){
     $string = ($class == ''  ? "<ul>" : "<ul class=".$class.">");
     foreach($arr as $k=>$v){
         $string .='<li>
            <a href="'.$k.'" target="_blank">'.$v.'</a>
         </li>';
     }
     $string .='</ul>';
     return $string;
 }

 function show_certificates($conn, $sql){
     $string = '<ul>';
     foreach ($conn->query($sql) as $row) {
     $string .= '<li>'.$row['name'].' ('.$row['company'].' '.$row['year'].')'.'</li>';
 }
 $string .='</ul>';
 return $string;
 }

 function show_educations($conn, $sql){
     $string = '';
     $head = '';
     foreach ($conn->query($sql) as $row) {

         if ($row['school'] != $head){
             $head = $row['school'];
             $string .=  '<h3>'.$head.'</h3>';
         }
         $string .= '<p class="info">';
         $string .= $row['degree'];
         $string .= '<span>&bull;</span>
             <em class="date">';
         $string .= $row['data'] ;
         $string .= '</em>
         </p>
         <p>
             Advisor: ';
         $string .= $row['advisor'];
         $string .= '<br/>'. $row['title'];
         if ($row['href'] != "#") $string.=  '<a href="'.$row['href'] .'"> View </a>';
         $string .= '</p>';
 }
 return $string;
 }

 function show_work($conn, $sql){
     $string = '';
     foreach ($conn->query($sql) as $row) {
     $string .= '<div class="row item">
         <div class="twelve columns">';
     $string  .= '<h3>'.$row['name'].'</h3>';
     $string .= '<p class="info">'.$row['company'];
     $string .= '<span>&bull;</span>
     <em class="date">'.$row['begining'];
     if($row['endW']!=''){$string .= ' - '.$row['endW'];}
     $string .= '</em> </p> </div></div>';
     }
     return $string;
 }


 function show_monography($conn, $sql){
     $string = '<div class="row item">
         <div class="twelve columns">';
    foreach ($conn->query($sql) as $row) {
        $string .= '<h3>'.$row['title'].', chapter '.$row['chapter'].'</h3>';
        $string .= '<h4>'.$row['bookt'].'</h4><p>ED. '.$row['editors'].'</p>';
        $string .= '<p class="info">'.$row['authors'].'<br/> <span>&bull;</span> <em class="date">';
        switch ($row['state']) {
            case 'published':
                $string .= $row['journal'];
                $string .= '  ('.$row['data'].')  ';
                $string .= '</em></p>';
                break;
            case 'submitted':
            $string .= 'submitted to <a href=" '.$row['href'].' " target="_blanck">'.$row['journal'].'
            </a>
            </em>
            </p>';
                break;
            default:
                $string .= 'to appear </em>
                     </p>';
                break;
        }
        if($row['info'] =='TRUE'){
                $file_dba = new PDO('sqlite:db_web.db');
                $sql_i = "SELECT * FROM publications_info WHERE id_publication=".$row['id'];
                foreach ($file_dba->query($sql_i) as $rows) {
                    $string .= '<p>'.$rows['content'].' <a href=" '.$rows['href'].'" target="_blanck"> View </a></p>';
            }
        }
    }
     $string .= '</div>
      </div>';

     return $string;
 }

 function show_publications($conn, $sql){
     $string = '<div class="row item">
         <div class="twelve columns">';
    foreach ($conn->query($sql) as $row) {
        $string .= '<h3>'.$row['title'].'</h3>';
        $string .= '<p class="info">'.$row['authors'].'<br/> <span>&bull;</span> <em class="date">';
        switch ($row['state']) {
            case 'published':
                $string .= '<a href="'.$row['href'].'" target="_blanck">';
                $string .= $row['journal'];
                if($row['vol'] !=''){ $string .= '  vol.  '.$row['vol'];}
                if($row['no'] !=''){ $string .= '  no.  '.$row['no'];}
                $string .= '  ('.$row['data'].')  ';
                $string .= '</a></em></p>';
                break;
            case 'submitted':
            $string .= 'submitted to <a href=" '.$row['href'].' " target="_blanck">'.$row['journal'].'
            </a>
            </em>
            </p>';
                break;
            default:
                $string .= 'to appear </em>
                     </p>';
                break;
        }
        if($row['info'] =='TRUE'){
                $file_dba = new PDO('sqlite:db_web.db');
                $sql_i = "SELECT * FROM publications_info WHERE id_publication=".$row['id'];
                foreach ($file_dba->query($sql_i) as $rows) {
                    $string .= '<p>'.$rows['content'].' <a href=" '.$rows['href'].'" target="_blanck"> View </a></p>';
            }
        }
    }
     $string .= '</div>
      </div>';

     return $string;
 }


 function schow_events($conn, $sql){
     $string = '<ul class="slides">';
     foreach ($conn->query($sql) as $row) {
         $string .= '<li>
             <h2><a href="'.$row['href'].' " target="_blank"> '.$row['name'].'</a>
             <br/>'.$row['mounth'].', '.$row['data'].', '.$row['city'].', '.$row['country'].'</h2>';
        $string .=  '<p>'.$row['content'].'</p><cite>'.$row['tags'].'</cite></li>';  
    }
    $string .= '</ul>';
     return $string;
 }
?>
