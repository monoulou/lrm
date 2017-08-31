<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5b7a428b876dc239c65ac6866387acd868f21bb858b0b992165305ae9628bc0d extends Twig_Template
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
        $__internal_1a52d2e64ca972c84604a110cfd7b889dcdd50c357e56b310d7604eb5c2437d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a52d2e64ca972c84604a110cfd7b889dcdd50c357e56b310d7604eb5c2437d4->enter($__internal_1a52d2e64ca972c84604a110cfd7b889dcdd50c357e56b310d7604eb5c2437d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8581b016940bd70427315f5b28820157ec9521e8f7d6deb180fcba8ec0672264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8581b016940bd70427315f5b28820157ec9521e8f7d6deb180fcba8ec0672264->enter($__internal_8581b016940bd70427315f5b28820157ec9521e8f7d6deb180fcba8ec0672264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1a52d2e64ca972c84604a110cfd7b889dcdd50c357e56b310d7604eb5c2437d4->leave($__internal_1a52d2e64ca972c84604a110cfd7b889dcdd50c357e56b310d7604eb5c2437d4_prof);

        
        $__internal_8581b016940bd70427315f5b28820157ec9521e8f7d6deb180fcba8ec0672264->leave($__internal_8581b016940bd70427315f5b28820157ec9521e8f7d6deb180fcba8ec0672264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
