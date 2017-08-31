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
        $__internal_98b31646952a498baabce1c0f0c057ae5d06fe24fcce7af3b60d4a093de7ac8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b31646952a498baabce1c0f0c057ae5d06fe24fcce7af3b60d4a093de7ac8a->enter($__internal_98b31646952a498baabce1c0f0c057ae5d06fe24fcce7af3b60d4a093de7ac8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7c5d92107a5362ad3ab99a0f30427beae1cad4ba70a9cc0efee445e94fac410f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5d92107a5362ad3ab99a0f30427beae1cad4ba70a9cc0efee445e94fac410f->enter($__internal_7c5d92107a5362ad3ab99a0f30427beae1cad4ba70a9cc0efee445e94fac410f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_98b31646952a498baabce1c0f0c057ae5d06fe24fcce7af3b60d4a093de7ac8a->leave($__internal_98b31646952a498baabce1c0f0c057ae5d06fe24fcce7af3b60d4a093de7ac8a_prof);

        
        $__internal_7c5d92107a5362ad3ab99a0f30427beae1cad4ba70a9cc0efee445e94fac410f->leave($__internal_7c5d92107a5362ad3ab99a0f30427beae1cad4ba70a9cc0efee445e94fac410f_prof);

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
