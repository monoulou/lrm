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
        $__internal_f8cfcdbc2fd5d34789e1985482d174e0a4fe37bb0c19a7ad23bc0bc3455d43bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cfcdbc2fd5d34789e1985482d174e0a4fe37bb0c19a7ad23bc0bc3455d43bb->enter($__internal_f8cfcdbc2fd5d34789e1985482d174e0a4fe37bb0c19a7ad23bc0bc3455d43bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_346a65dc07e2ebb4d1f61eb63b08843838c936f13626cbb30175c99ea90ebc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346a65dc07e2ebb4d1f61eb63b08843838c936f13626cbb30175c99ea90ebc68->enter($__internal_346a65dc07e2ebb4d1f61eb63b08843838c936f13626cbb30175c99ea90ebc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f8cfcdbc2fd5d34789e1985482d174e0a4fe37bb0c19a7ad23bc0bc3455d43bb->leave($__internal_f8cfcdbc2fd5d34789e1985482d174e0a4fe37bb0c19a7ad23bc0bc3455d43bb_prof);

        
        $__internal_346a65dc07e2ebb4d1f61eb63b08843838c936f13626cbb30175c99ea90ebc68->leave($__internal_346a65dc07e2ebb4d1f61eb63b08843838c936f13626cbb30175c99ea90ebc68_prof);

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
