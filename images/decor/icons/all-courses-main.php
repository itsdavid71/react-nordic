<?php
            
            $block = '<section id="courses" class="check-width">
                        <h2 class="courses-header">Выберите курс</h2>
                        <div class="courses-all">';
                
             $sql = "SELECT id, `ico-main`, link, name, type, prefix, short_name, course_level1_text
                    FROM course
                    WHERE id NOT IN (3)
					ORDER BY FIELD(id, '10', '9', '11', '8') DESC
                    ";
                    
            $rs = mysql_query($sql);  
            while ($row = mysql_fetch_assoc($rs)) {   
               
             $block .= '
					<style>
						.course-python {
							background-image: url(../images/decor/icons/python.png);
						}
					</style>
                    <a href="/courses/'.$row['link'].'" class="course-block">  
                        <div class="course-block-logo course-'.$row['prefix'].'"></div>
                        <div class="course-block-info">';
						if ($row['id'] != 8 && $row['id'] != 9 && $row['id'] != 10 && $row['id'] != 11) {
							$block .= '<h3><span>Курс '.$row['short_name'].'</span></h3>';
						} else if ($row['id'] == 8){
							$block .= '<h3><span>Курс WEB-разработки<br>(144 ак.часа)</span></h3>';
						}else if ($row['id'] == 9){
							$block .= '<h3><span>Курс JAVA и Android<br>(110 ак.часов)</span></h3>';
						}
						else if ($row['id'] == 10){
							$block .= '<h3><span>Курс C# и .NET<br>(144 ак.часа)</span></h3>';
						}
						else if ($row['id'] == 11){
							$block .= '<h3><span>Курс "Анализ данных на Python"<br>(144 ак.часа)</span></h3>';
						}
                            
            
            // требуемая подготовка
                $course = explode(",", $row['course_level1_text']); 
                
                for ($i=1;$i<(count($course));$i++){
                    $course_end .= ','.$course[$i];
                }
                
                if ($course[0] != "") {
                    $block .= '<p>Требуется подготовка по курсу<br>';
                    
                    $sql3 = "SELECT `short_name`, `link`
                            FROM course
                            WHERE `id` IN ({$course['0']}$course_end)";
        
                    $rs3 = mysql_query($sql3); 
                        
                    while ($row3 = mysql_fetch_assoc($rs3)) {
    
                        $block .=  '<span>'.$row3['short_name']. '</span>';
                       
                    }
                } else if ($row['id'] == 9 || $row['id'] == 11) {
					$block .= '<p>Курс для начинающих обучение с нуля</p>';
				} else if ($row['id'] == 10) {
					$block .= '<p>Курс для начинающих в разработке приложений</p>';
				} else  {
                    $block .= '<p>Курс для начинающих в разработке сайтов';
                }

            $block .= '</p>';
            

            $sql4 = "SELECT `in_day`
                    FROM groups
                    WHERE groups.course_id = {$row['id']} 
                    AND (DATEDIFF (CURDATE(), in_day) <= 0)
                    ORDER BY in_day 
                    LIMIT 1
                    ";
                    
            $rs4 = mysql_query($sql4);  
            
            while ($row4 = mysql_fetch_assoc($rs4)) {   
                
                $block .= '<div><div>Ближайшая группа:&nbsp;</div><div> '.parsDate($row4['in_day']).'</div></div>';
            }
            
           $block .= '</div>
                    </a>';
                    
            }
            
            $block .= '
                </div>
            </section>';
            
            echo $block;
            
    

?>