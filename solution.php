function solution($A, $K) {
    
    if($K==0 || count($A)==0){
        return $A;
    }
    $B=$A;
    if($K>count($A)){
        $K=$K%count($A);
    }
        for($j=0;$j<count($A);$j++){
            
            $s=$j+$K;
            if($s>count($A)-1){
$new=$s-count($A);
            }else{
$new=$s;
            }
            
            $B[$new]=$A[$j];
        }
    
    return $B;
}
