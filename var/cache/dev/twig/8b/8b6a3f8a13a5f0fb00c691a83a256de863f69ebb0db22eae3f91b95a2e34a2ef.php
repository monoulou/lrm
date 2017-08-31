<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dc16b7d31a65651776804938226a0e936c9e4b73f940345fd31967d08e1f1217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb2df2e5d96c603c099839649af4788eedda16241ed08c66bfdaa80e396b5dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2df2e5d96c603c099839649af4788eedda16241ed08c66bfdaa80e396b5dc9->enter($__internal_bb2df2e5d96c603c099839649af4788eedda16241ed08c66bfdaa80e396b5dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b64b1cc77691b6b803a30ffdd312b44cd394fa5ae0f43c1eb855441bedd804be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64b1cc77691b6b803a30ffdd312b44cd394fa5ae0f43c1eb855441bedd804be->enter($__internal_b64b1cc77691b6b803a30ffdd312b44cd394fa5ae0f43c1eb855441bedd804be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bb2df2e5d96c603c099839649af4788eedda16241ed08c66bfdaa80e396b5dc9->leave($__internal_bb2df2e5d96c603c099839649af4788eedda16241ed08c66bfdaa80e396b5dc9_prof);

        
        $__internal_b64b1cc77691b6b803a30ffdd312b44cd394fa5ae0f43c1eb855441bedd804be->leave($__internal_b64b1cc77691b6b803a30ffdd312b44cd394fa5ae0f43c1eb855441bedd804be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
