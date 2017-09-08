<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1b319372e09c7a18f708cd7a743680021a0fb10e65a1af6fba9b90deff82d26e extends Twig_Template
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
        $__internal_aac7d6cbd88522aa8f3d545cd7bfdacfcd7c43540846cbfbff6d94d92c318429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac7d6cbd88522aa8f3d545cd7bfdacfcd7c43540846cbfbff6d94d92c318429->enter($__internal_aac7d6cbd88522aa8f3d545cd7bfdacfcd7c43540846cbfbff6d94d92c318429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_193004b7feae36b55d9a58f3b5064c20be9e36b35723682dcacf91fb1a76441d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193004b7feae36b55d9a58f3b5064c20be9e36b35723682dcacf91fb1a76441d->enter($__internal_193004b7feae36b55d9a58f3b5064c20be9e36b35723682dcacf91fb1a76441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aac7d6cbd88522aa8f3d545cd7bfdacfcd7c43540846cbfbff6d94d92c318429->leave($__internal_aac7d6cbd88522aa8f3d545cd7bfdacfcd7c43540846cbfbff6d94d92c318429_prof);

        
        $__internal_193004b7feae36b55d9a58f3b5064c20be9e36b35723682dcacf91fb1a76441d->leave($__internal_193004b7feae36b55d9a58f3b5064c20be9e36b35723682dcacf91fb1a76441d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
