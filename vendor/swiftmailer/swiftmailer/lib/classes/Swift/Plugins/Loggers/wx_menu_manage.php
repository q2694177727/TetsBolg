 $id;
                $checks[]  =    (int)substr($id,0,2);
            }else{
                //一级添加
                $checks[]  =   $id;
                foreach ($data as $key => $val){
                    if($val['id']==$id){
                        if(!empty($data[$key]['children'])){
                            foreach ($data[$key]['children'] as $k=>$v){
                                $checks[]   =   $v['id'];
                            }
                        }
                        break;
                    }
                }
            }
        }else{
            //删除
            if($idlen>2){
                //二级的删除
                foreach ($checks as $key => $val){
                    if($id == $val){
                        unset($checks[$key]);
                        break;
                    }
                }
            }else{
                //一级删除
                foreach ($data as $key => $val){
                    if($val['id']==$id){
                        foreach ($checks as $key => $val){
                            if($id == $val){
                                unset($checks[$key]);
                            }
                        }
                        if(!empty($data[$key]['children'])){
                            foreach ($data[$key]['children'] as $k=>$v){
                                foreach ($checks as $key => $val){
                                    if($id == $v){
                                        unset($checks[$key]);
         