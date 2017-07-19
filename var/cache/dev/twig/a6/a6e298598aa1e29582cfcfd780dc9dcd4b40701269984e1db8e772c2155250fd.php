<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f22858b2ec70965828cd48bc69029d4fbe2c330671e3aba52cd797ea162e99b extends Twig_Template
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
        $__internal_dae392d42a6bb7b3f20d0ad02d3aab63382c8c5403e70f639ba52fd187f01980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae392d42a6bb7b3f20d0ad02d3aab63382c8c5403e70f639ba52fd187f01980->enter($__internal_dae392d42a6bb7b3f20d0ad02d3aab63382c8c5403e70f639ba52fd187f01980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_da1edc9efa54d1b27c3886a905803eb1072996213225f0f35c9b9e799d27bfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1edc9efa54d1b27c3886a905803eb1072996213225f0f35c9b9e799d27bfb3->enter($__internal_da1edc9efa54d1b27c3886a905803eb1072996213225f0f35c9b9e799d27bfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dae392d42a6bb7b3f20d0ad02d3aab63382c8c5403e70f639ba52fd187f01980->leave($__internal_dae392d42a6bb7b3f20d0ad02d3aab63382c8c5403e70f639ba52fd187f01980_prof);

        
        $__internal_da1edc9efa54d1b27c3886a905803eb1072996213225f0f35c9b9e799d27bfb3->leave($__internal_da1edc9efa54d1b27c3886a905803eb1072996213225f0f35c9b9e799d27bfb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
