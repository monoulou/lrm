<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a37a29ee30be38c3c73c5bf5d9de342c3fdeabbf7a5ce47c18b6cba310f0c5bf extends Twig_Template
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
        $__internal_8eb71889f3f53c6b9dbe142fd270f25615b6d95dc1b463a5823c4d4ac5f562fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb71889f3f53c6b9dbe142fd270f25615b6d95dc1b463a5823c4d4ac5f562fc->enter($__internal_8eb71889f3f53c6b9dbe142fd270f25615b6d95dc1b463a5823c4d4ac5f562fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f174038288b2a2cd97a2c3a1291d3d833d1b77991f74b106cdc8fd4554e1711b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f174038288b2a2cd97a2c3a1291d3d833d1b77991f74b106cdc8fd4554e1711b->enter($__internal_f174038288b2a2cd97a2c3a1291d3d833d1b77991f74b106cdc8fd4554e1711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8eb71889f3f53c6b9dbe142fd270f25615b6d95dc1b463a5823c4d4ac5f562fc->leave($__internal_8eb71889f3f53c6b9dbe142fd270f25615b6d95dc1b463a5823c4d4ac5f562fc_prof);

        
        $__internal_f174038288b2a2cd97a2c3a1291d3d833d1b77991f74b106cdc8fd4554e1711b->leave($__internal_f174038288b2a2cd97a2c3a1291d3d833d1b77991f74b106cdc8fd4554e1711b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
