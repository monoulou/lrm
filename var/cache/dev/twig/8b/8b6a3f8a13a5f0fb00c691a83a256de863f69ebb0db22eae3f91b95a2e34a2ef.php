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
        $__internal_5c19469a8b0dbaf71fb274667b11dc6b4dd471ad99e95baf0492b3eaec60c039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c19469a8b0dbaf71fb274667b11dc6b4dd471ad99e95baf0492b3eaec60c039->enter($__internal_5c19469a8b0dbaf71fb274667b11dc6b4dd471ad99e95baf0492b3eaec60c039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f1979a6d4c2785c5374520e0e4f110f6d4c19598d7901f0d2f15d75a30bffafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1979a6d4c2785c5374520e0e4f110f6d4c19598d7901f0d2f15d75a30bffafe->enter($__internal_f1979a6d4c2785c5374520e0e4f110f6d4c19598d7901f0d2f15d75a30bffafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5c19469a8b0dbaf71fb274667b11dc6b4dd471ad99e95baf0492b3eaec60c039->leave($__internal_5c19469a8b0dbaf71fb274667b11dc6b4dd471ad99e95baf0492b3eaec60c039_prof);

        
        $__internal_f1979a6d4c2785c5374520e0e4f110f6d4c19598d7901f0d2f15d75a30bffafe->leave($__internal_f1979a6d4c2785c5374520e0e4f110f6d4c19598d7901f0d2f15d75a30bffafe_prof);

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
