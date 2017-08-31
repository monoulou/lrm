<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_697be029229657c2afc06329c2896ac523db2fc90a05a3f1b4fbbd2ad7075b2b extends Twig_Template
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
        $__internal_452707d7122376eaddab876577ade02a411448a49b749cd9f9932ae11d585390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452707d7122376eaddab876577ade02a411448a49b749cd9f9932ae11d585390->enter($__internal_452707d7122376eaddab876577ade02a411448a49b749cd9f9932ae11d585390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1af5606fb784b07716bcf6768ecdac6be2e4de314c77dd9e29c8b20a18e2afa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af5606fb784b07716bcf6768ecdac6be2e4de314c77dd9e29c8b20a18e2afa0->enter($__internal_1af5606fb784b07716bcf6768ecdac6be2e4de314c77dd9e29c8b20a18e2afa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_452707d7122376eaddab876577ade02a411448a49b749cd9f9932ae11d585390->leave($__internal_452707d7122376eaddab876577ade02a411448a49b749cd9f9932ae11d585390_prof);

        
        $__internal_1af5606fb784b07716bcf6768ecdac6be2e4de314c77dd9e29c8b20a18e2afa0->leave($__internal_1af5606fb784b07716bcf6768ecdac6be2e4de314c77dd9e29c8b20a18e2afa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
