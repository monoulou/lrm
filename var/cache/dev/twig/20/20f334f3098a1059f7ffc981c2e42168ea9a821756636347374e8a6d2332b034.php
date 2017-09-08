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
        $__internal_11a44211c9e27e19ad29cfbd4069e7418429536c6c577da5bc878672ce957e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a44211c9e27e19ad29cfbd4069e7418429536c6c577da5bc878672ce957e17->enter($__internal_11a44211c9e27e19ad29cfbd4069e7418429536c6c577da5bc878672ce957e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2e5f0162e8fc32e3ccd84062ace5d96035c73cfc9b76679587d748b57b0f84a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5f0162e8fc32e3ccd84062ace5d96035c73cfc9b76679587d748b57b0f84a5->enter($__internal_2e5f0162e8fc32e3ccd84062ace5d96035c73cfc9b76679587d748b57b0f84a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_11a44211c9e27e19ad29cfbd4069e7418429536c6c577da5bc878672ce957e17->leave($__internal_11a44211c9e27e19ad29cfbd4069e7418429536c6c577da5bc878672ce957e17_prof);

        
        $__internal_2e5f0162e8fc32e3ccd84062ace5d96035c73cfc9b76679587d748b57b0f84a5->leave($__internal_2e5f0162e8fc32e3ccd84062ace5d96035c73cfc9b76679587d748b57b0f84a5_prof);

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
