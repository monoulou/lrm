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
        $__internal_f99c57a534cb5f971a90891ed13b8f7d383a15a9d3d80c0995d4e0abc3e469d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99c57a534cb5f971a90891ed13b8f7d383a15a9d3d80c0995d4e0abc3e469d9->enter($__internal_f99c57a534cb5f971a90891ed13b8f7d383a15a9d3d80c0995d4e0abc3e469d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_75421799389ba6dfa7cc901b6b41964d3ba0dca73246d434190d9e08a1ec1296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75421799389ba6dfa7cc901b6b41964d3ba0dca73246d434190d9e08a1ec1296->enter($__internal_75421799389ba6dfa7cc901b6b41964d3ba0dca73246d434190d9e08a1ec1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f99c57a534cb5f971a90891ed13b8f7d383a15a9d3d80c0995d4e0abc3e469d9->leave($__internal_f99c57a534cb5f971a90891ed13b8f7d383a15a9d3d80c0995d4e0abc3e469d9_prof);

        
        $__internal_75421799389ba6dfa7cc901b6b41964d3ba0dca73246d434190d9e08a1ec1296->leave($__internal_75421799389ba6dfa7cc901b6b41964d3ba0dca73246d434190d9e08a1ec1296_prof);

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
