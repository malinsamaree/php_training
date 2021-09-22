<?php
class FestgeldViewBuilder{

    private string $markup = '';

    private function twoColumnLayout(TwoColumnLayout $twoColumnLayout){
        $title = $twoColumnLayout->getTitle();
        $descriptionBefore = $twoColumnLayout->getDescriptionBefore();
        $left = $twoColumnLayout->getLeft();
        $right = $twoColumnLayout->getRight();
        $descriptionAfter = $twoColumnLayout->getDescriptionAfter();


        $this->markup .= HtmlTags::section;
        if(!is_null($title)){
            $this->markup .= '<h2>'. $title .'</h2>';
        }
        if(!is_null($descriptionBefore)){
            $this->markup .= '<p>'. $descriptionBefore .'</p>';
        }

        $leftMarkup = '';
        if(!empty($left)){
            foreach($left as $value){
                $leftMarkup .= $value;
            }
        }

        $rightMarkup = '';
        if(!empty($right)){
            foreach($right as $value){
                $rightMarkup .= $value;
            }
        }

        $this->markup .= '
            <div class="two-cols">
                <div class="two-cols__left">'.$leftMarkup.'</div>
                <div class="two-cols__right">'.$rightMarkup.'</div>
            </div>
            ';

        if(!is_null($descriptionAfter)){    
            $this->markup .= '<p>'. $descriptionAfter .'</p>';
        }
        $this->markup .= HtmlTags::sectionClose;
    }

    private function threeColumnLayout(ThreeColumnLayout $threeColumnLayout){
        $description = $threeColumnLayout->getDescription();

        $this->markup .= HtmlTags::section;
        if(!is_null($description)){
            $this->markup .= '<p>' . $description . '</p>';
        }
        $this->markup .= HtmlTags::sectionClose;
    }

    private function sectionOne(){
        $sectionOne = new Section();
        $twoColumnLayout = new TwoColumnLayout();
        $twoColumnLayout->setTitle('this is a two column layout');
        $twoColumnLayout->setDescriptionBefore('
        this paragraph comes before the two columns 
        this paragraph comes before the two columns 
        this paragraph comes before the two columns 
        this paragraph comes before the two columns 
        this paragraph comes before the two columns 
        this paragraph comes before the two columns 
        ');

        $leftArray = [];
        $leftArrayPara1 = '<p>This is the first paragraph in the left column</p>'; // object
        $leftArray[] = $leftArrayPara1;
        $leftArrayList1 = '<ul><li>list item 1</li><li>list item 2</li></ul>'; // object
        $leftArray[] = $leftArrayList1;
        $leftArrayImage1 = '<img src="images/investment.jpg">'; // object
        $leftArray[] = $leftArrayImage1;
        $twoColumnLayout->setLeft($leftArray);

        $twoColumnLayout->setRight(['<p>This is the right paragraph</p>']);

        $twoColumnLayout->setDescriptionAfter('this paragraph comes after the two colums');
        $sectionOne->setLayout($twoColumnLayout);
        $this->twoColumnLayout($sectionOne->getLayout());
    }

    private function sectionTwo(){
        $sectionTwo = new Section();
        $threeColumnLayout = new ThreeColumnLayout();
        $threeColumnLayout->setDescription('my description');
        $sectionTwo->setLayout($threeColumnLayout);
        $this->threeColumnLayout($sectionTwo->getLayout());
    }

    public function render(){
        $this->sectionOne();
        $this->sectionTwo();
        echo $this->markup;
    }
}