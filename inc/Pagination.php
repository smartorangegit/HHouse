<?php

class Pagination
{
    public $buttons = array();
	public $options= array('itemsCount' => 0, 'itemsPerPage' => 2, 'currentPage' => 1);
	public $elements= 4;

	public $page;
    public $text;
    public $isActive;
	public $isString;
	
		 static function createPagination()
		 {
			 return new Pagination();
		 }
		 
		 /**
		  *  @brief (Пагінація)
		  *  
		  *  @details ()		
		  */
		 public function PaginationAdd()
		 {		
			$options=$this->options;
			
			extract($options);

			/** @var int $currentPage */
			if (!$currentPage) {
				return;
			}

			/** @var int $pagesCount
			 *  @var int $itemsCount
			 *  @var int $itemsPerPage
			 */
			$pagesCount = ceil($itemsCount / $itemsPerPage);

			if ($pagesCount == 1) {
				return;
			}

			/** @var int $currentPage */
			if ($currentPage > $pagesCount) {
				$currentPage = $pagesCount;
			}
		/*Previous*/	
		if ($pagesCount>1)
		{
			
			if ($currentPage - 1==0){
				$this->buttons[] = $this->Button($pagesCount, true, 'Previous');
				//$this->buttons[] = '';
			}
			else
			{
			$this->buttons[] = $this->Button($currentPage - 1, $currentPage > 1, 'Previous');
			//$this->buttons[] = '';
			}
		}
			for ($i = 1; $i <= $pagesCount; $i++) 
			{
				$active = $currentPage != $i;
							
				if ($currentPage>=$this->elements)
				{
					
					if ($pagesCount>5)
					{
						if ($currentPage+1==$pagesCount AND  $currentPage-3==$i)
						{
							$this->buttons[] = $this->Button($i, $active);	
						}
						if ($currentPage==$pagesCount AND  $currentPage-4==$i)
						{
							$this->buttons[] = $this->Button($i, $active);	
							$this->buttons[] = $this->Button($i+1, $active);	
						}
					
					}
					
					if ($currentPage-2>$i)
					{
					}
					else
					{
						
						
						
						
						if ($i>$currentPage+1 && $currentPage<=$pagesCount && $pagesCount!=$i)
						{
								
						}
						else
						{
							$this->buttons[] = $this->Button($i, $active);							
						}					
					}
				}
				else
				{
						if ($i>$currentPage+1 && $currentPage<=$pagesCount && $pagesCount!=$i)
						{												
							if ($currentPage<=2+2 && $i<=2+2)
							{
								$this->buttons[] = $this->Button($i, $active);	
							}
						}
						else
						{
													
							$this->buttons[] = $this->Button($i, $active);							
						}	
				}	
			}
			
			
			if ($pagesCount>5)
			{
				if ($currentPage+2>=$pagesCount)
				{
					
				}
				else{
				array_splice( $this->buttons, 5, 0, array($this->Button('', 1,'...',1) ));
				}
			}
			
			
			/*Next*/
				if ($pagesCount>1)
		{	
			if ($currentPage + 1>$pagesCount){
				$this->buttons[] = $this->Button(1, true, 'Next');
				//$this->buttons[] = '';
			}
			else
			{
			$this->buttons[] = $this->Button($currentPage + 1, $currentPage < $pagesCount, 'Next');
			//$this->buttons[] = '';
			}
		}	
			
			
			//return $this->buttons;
		}
	
    /**
     *  @brief (Заповнення сторінок  масиву пагінації інформацією)
     *  @param [int] $page Сторінка
     *  @param [int] $isActive Активна сторінк/не авктивна
     *  @param [string] $text Previous/Next
     *  
     *  @details ()
     */
    public function Button($page, $isActive = true, $text = null, $isString = null)
    {
      $this->page = $page;
      $this->text = is_null($text) ? $page : $text;
      $this->isActive = $isActive;
	  $this->isString=5;
	 
	  return (object)compact (array('page','text','isActive','isString'));
    }
}