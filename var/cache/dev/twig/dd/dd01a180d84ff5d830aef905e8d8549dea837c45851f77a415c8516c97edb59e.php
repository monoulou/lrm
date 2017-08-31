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
        $__internal_1f2d6b936695eba6613f726b61f7ee42c7522a8a40cbac73cb2060a43416ff88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2d6b936695eba6613f726b61f7ee42c7522a8a40cbac73cb2060a43416ff88->enter($__internal_1f2d6b936695eba6613f726b61f7ee42c7522a8a40cbac73cb2060a43416ff88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_46c6a646ab61f72572805bc21c42ef5768bb63faf2f26f10d902fc03d9f9e13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c6a646ab61f72572805bc21c42ef5768bb63faf2f26f10d902fc03d9f9e13c->enter($__internal_46c6a646ab61f72572805bc21c42ef5768bb63faf2f26f10d902fc03d9f9e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1f2d6b936695eba6613f726b61f7ee42c7522a8a40cbac73cb2060a43416ff88->leave($__internal_1f2d6b936695eba6613f726b61f7ee42c7522a8a40cbac73cb2060a43416ff88_prof);

        
        $__internal_46c6a646ab61f72572805bc21c42ef5768bb63faf2f26f10d902fc03d9f9e13c->leave($__internal_46c6a646ab61f72572805bc21c42ef5768bb63faf2f26f10d902fc03d9f9e13c_prof);

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
