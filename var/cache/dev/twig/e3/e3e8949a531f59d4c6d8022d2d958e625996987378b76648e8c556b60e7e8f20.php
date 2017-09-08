<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e67b04b27d85034815adc5dcbb3d99e0ce258660c19d13aaf99031addd50bd1b extends Twig_Template
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
        $__internal_6edb06f87262941f02fda3d465900da915d09688e93d93dae3f14eda92bf0292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edb06f87262941f02fda3d465900da915d09688e93d93dae3f14eda92bf0292->enter($__internal_6edb06f87262941f02fda3d465900da915d09688e93d93dae3f14eda92bf0292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cd8e4451c62ba3cef820c28214fbcbcfca567eb8a19841f7fe6838cb0865a23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8e4451c62ba3cef820c28214fbcbcfca567eb8a19841f7fe6838cb0865a23b->enter($__internal_cd8e4451c62ba3cef820c28214fbcbcfca567eb8a19841f7fe6838cb0865a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6edb06f87262941f02fda3d465900da915d09688e93d93dae3f14eda92bf0292->leave($__internal_6edb06f87262941f02fda3d465900da915d09688e93d93dae3f14eda92bf0292_prof);

        
        $__internal_cd8e4451c62ba3cef820c28214fbcbcfca567eb8a19841f7fe6838cb0865a23b->leave($__internal_cd8e4451c62ba3cef820c28214fbcbcfca567eb8a19841f7fe6838cb0865a23b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
