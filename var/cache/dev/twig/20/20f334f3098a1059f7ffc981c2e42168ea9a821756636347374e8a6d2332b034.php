<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6730e20c303b6ca5767192e40bc900cff4f3210edf5d62275fd8e5040947e6e3 extends Twig_Template
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
        $__internal_cb1e7cddcdbd43c222a284d0855ae2e2072df2f52187a06cd94587778aeaf77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1e7cddcdbd43c222a284d0855ae2e2072df2f52187a06cd94587778aeaf77d->enter($__internal_cb1e7cddcdbd43c222a284d0855ae2e2072df2f52187a06cd94587778aeaf77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3d0381f7b8c655183add6f8290daf41ea4322ff777f8d7c09e2d0635665c498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0381f7b8c655183add6f8290daf41ea4322ff777f8d7c09e2d0635665c498c->enter($__internal_3d0381f7b8c655183add6f8290daf41ea4322ff777f8d7c09e2d0635665c498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb1e7cddcdbd43c222a284d0855ae2e2072df2f52187a06cd94587778aeaf77d->leave($__internal_cb1e7cddcdbd43c222a284d0855ae2e2072df2f52187a06cd94587778aeaf77d_prof);

        
        $__internal_3d0381f7b8c655183add6f8290daf41ea4322ff777f8d7c09e2d0635665c498c->leave($__internal_3d0381f7b8c655183add6f8290daf41ea4322ff777f8d7c09e2d0635665c498c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
